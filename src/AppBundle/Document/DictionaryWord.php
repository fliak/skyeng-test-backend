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
 * Class DictionaryWord
 * @package AppBundle\Document
 * @ODM\Document
 */
class DictionaryWord
{
    /**
     * @var string
     * @ODM\Id
     */
    protected $id;


    /**
     * @var Dictionary
     * @ODM\ReferenceOne(targetDocument="Dictionary")
     */
    protected $dictionary;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $origin;
    
    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $translation;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return DictionaryWord
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Dictionary
     */
    public function getDictionary()
    {
        return $this->dictionary;
    }

    /**
     * @param Dictionary $dictionary
     * @return DictionaryWord
     */
    public function setDictionary($dictionary)
    {
        $this->dictionary = $dictionary;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return DictionaryWord
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @param string $translation
     * @return DictionaryWord
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
        return $this;
    }
    
    
    
    
}