<?php
/**
 * Created by PhpStorm.
 * User: fliak
 * Date: 20.8.16
 * Time: 7.14
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use UserBundle\Model\Student;
use UserBundle\Model\User;

/**
 * Class Test
 * @package AppBundle\Document
 *
 * @ODM\Document
 */
class Test
{

    /**
     * @var string
     * @ODM\Id
     */
    protected $id;

    /**
     * @var Student
     * @ODM\ReferenceOne(targetDocument="UserBundle\Model\Student", simple=true)
     */
    protected $student;

    /**
     * @var bool
     * @ODM\Field(type="boolean")
     */
    protected $pending;

    /**
     * @var \DateTime
     * @ODM\Date
     */
    protected $startedAt;


    public function __construct()
    {
        $this->startedAt = new \DateTime();
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
     * @return Test
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * @param Student $student
     * @return Test
     */
    public function setStudent($student)
    {
        $this->student = $student;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPending()
    {
        return $this->pending;
    }

    /**
     * @param boolean $pending
     * @return Test
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTime $startedAt
     * @return Test
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
        return $this;
    }

    

}