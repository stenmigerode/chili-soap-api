<?php

namespace Chili\WebServices;

class ServerSaveSystemInfoXML
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
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @param string $apiKey
     * @param string $name
     * @param string $xml
     * @access public
     */
    public function __construct($apiKey, $name, $xml)
    {
      $this->apiKey = $apiKey;
      $this->name = $name;
      $this->xml = $xml;
    }

}
