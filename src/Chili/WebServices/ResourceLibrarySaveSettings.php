<?php

namespace Chili\WebServices;

class ResourceLibrarySaveSettings
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $resourceName
     * @access public
     */
    public $resourceName = null;

    /**
     * @var string $libraryName
     * @access public
     */
    public $libraryName = null;

    /**
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $libraryName
     * @param string $xml
     * @access public
     */
    public function __construct($apiKey, $resourceName, $libraryName, $xml)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->libraryName = $libraryName;
      $this->xml = $xml;
    }

}
