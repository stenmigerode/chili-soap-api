<?php

namespace Chili\WebServices;

class ServerLicenseRequest
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $remoteFunction
     * @access public
     */
    public $remoteFunction = null;

    /**
     * @var string $argumentsXML
     * @access public
     */
    public $argumentsXML = null;

    /**
     * @param string $apiKey
     * @param string $remoteFunction
     * @param string $argumentsXML
     * @access public
     */
    public function __construct($apiKey, $remoteFunction, $argumentsXML)
    {
      $this->apiKey = $apiKey;
      $this->remoteFunction = $remoteFunction;
      $this->argumentsXML = $argumentsXML;
    }

}
