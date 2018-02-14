<?php

namespace Chili\WebServices;

class ServerDeleteSavedSystemInfoXML
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @param string $apiKey
     * @param string $name
     * @access public
     */
    public function __construct($apiKey, $name)
    {
      $this->apiKey = $apiKey;
      $this->name = $name;
    }

}
