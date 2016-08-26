<?php
/**
 * Created by PhpStorm.
 * User: fliak
 * Date: 20.8.16
 * Time: 6.52
 */

namespace UserBundle\Manager;


use Doctrine\ODM\MongoDB\DocumentRepository;
use UserBundle\Model\Student;
use UserBundle\Model\User;

class UserManager
{

    /**
     * @var DocumentRepository
     */
    protected $repo;


    public function __construct($repo)
    {
        $this->repo = $repo;
        
    }
    
    public function loadUserByUsername($username)   {
        return $this->repo->findOneBy(['username' => $username]);
    }

    
    public function factoryAdmin()  {
        $user = new User();
        $user->addRole('ROLE_ADMIN');

        return $user;
    }
    
    public function factoryStudent($username, $save)   {
        $user = new Student();
        $user->setUsername($username);
        $user->addRole('ROLE_STUDENT');

        $this->repo->getDocumentManager()->persist($user);

        if ($save)  {
            $this->repo->getDocumentManager()->flush();
        }
        
        return $user;
    }



}