<?php

namespace Chili\WebServices;

class LanguagesGetList
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var boolean $includeSystemLanguages
     * @access public
     */
    public $includeSystemLanguages = null;

    /**
     * @param string $apiKey
     * @param boolean $includeSystemLanguages
     * @access public
     */
    public function __construct($apiKey, $includeSystemLanguages)
    {
      $this->apiKey = $apiKey;
      $this->includeSystemLanguages = $includeSystemLanguages;
    }

}
