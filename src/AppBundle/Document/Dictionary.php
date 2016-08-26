<?php
/**
 * Created by PhpStorm.
 * User: fliak
 * Date: 20.8.16
 * Time: 8.38
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class Dictionary
 * @package AppBundle\Document
 * @ODM\Document
 */
class Dictionary
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
    protected $name;
    
    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $originLanguage;
    
    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $translationLanguage;
    


}