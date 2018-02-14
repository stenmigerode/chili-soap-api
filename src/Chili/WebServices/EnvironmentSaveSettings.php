<?php

namespace Chili\WebServices;

class EnvironmentSaveSettings
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $environmentName
     * @access public
     */
    public $environmentName = null;

    /**
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @param string $apiKey
     * @param string $environmentName
     * @param string $xml
     * @access public
     */
    public function __construct($apiKey, $environmentName, $xml)
    {
      $this->apiKey = $apiKey;
      $this->environmentName = $environmentName;
      $this->xml = $xml;
    }

}
