<?php

namespace UserBundle\Model;

use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class User
 * @package UserBundle\Model
 * 
 * @ODM\Document
 */
class User implements UserInterface
{

    /**
     * @var string
     * @ODM\Id
     */
    protected $id;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $username;

    /**
     * @var array
     */
    protected $roles = [];


    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    
    public function addRole($role)  {
        if (!is_array($this->roles))    {
            $this->roles = [];
        }
        
        if (!in_array($role, $this->roles)) {
            $this->roles[] = $role;
        }
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    
}