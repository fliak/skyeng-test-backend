<?php
/**
 * Created by PhpStorm.
 * User: fliak
 * Date: 20.8.16
 * Time: 7.10
 */

namespace UserBundle\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


/**
 * Class Student
 * @package UserBundle\Model
 * @ODM\Document
 */
class Student extends User
{

    /**
     * @var array
     * @ODM\ReferenceOne(targetDocument="DictionaryTest")
     */
    protected $pendingTest;

    /**
     * @return array
     */
    public function getPendingTest()
    {
        return $this->pendingTest;
    }

    /**
     * @param array $pendingTest
     */
    public function setPendingTest($pendingTest)
    {
        $this->pendingTest = $pendingTest;
    }

    
    

}