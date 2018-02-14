<?php

namespace Chili\WebServices;

class ServerSaveSettings
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @param string $apiKey
     * @param string $xml
     * @access public
     */
    public function __construct($apiKey, $xml)
    {
      $this->apiKey = $apiKey;
      $this->xml = $xml;
    }

}
