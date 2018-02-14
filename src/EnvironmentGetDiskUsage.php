<?php

namespace Chili\WebServices;

class EnvironmentGetDiskUsage
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $requestedResourceXML
     * @access public
     */
    public $requestedResourceXML = null;

    /**
     * @param string $apiKey
     * @param string $requestedResourceXML
     * @access public
     */
    public function __construct($apiKey, $requestedResourceXML)
    {
      $this->apiKey = $apiKey;
      $this->requestedResourceXML = $requestedResourceXML;
    }

}
