<?php
/**
 * Created by PhpStorm.
 * User: fliak
 * Date: 20.8.16
 * Time: 8.34
 */

namespace AppBundle\Document;


class DictionaryTest
{

    /**
     * @var array
     */
    protected $state;

    /**
     * @return array
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param array $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    
    

}