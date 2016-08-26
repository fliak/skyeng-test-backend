<?php

namespace UserBundle\UserProvider;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use UserBundle\Manager\UserManager;
use UserBundle\Model\User;

class UserProvider implements UserProviderInterface
{

    /**
     * @var UserManager
     */
    protected $userManager;
    
    public function __construct($userManager)
    {
        $this->userManager = $userManager;
    }

    public function refreshUser(UserInterface $user)
    {
        return $user;
    }

    public function loadUserByUsername($username)
    {
        if (!$username) return null;
        
        if ($username === 'admin')  {
            return $this->userManager->factoryAdmin();
        }
        
        $user = $this->userManager->loadUserByUsername($username);
        if (!$user) {
            $user = $this->userManager->factoryStudent($username, true);
        }

        return $user;
    }

    public function supportsClass($class)
    {
        return $class === User::class;
    }
}
