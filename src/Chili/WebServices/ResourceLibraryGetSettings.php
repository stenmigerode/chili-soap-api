<?php

namespace Chili\WebServices;

class ResourceLibraryGetSettings
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
     * @param string $apiKey
     * @param string $resourceName
     * @param string $libraryName
     * @access public
     */
    public function __construct($apiKey, $resourceName, $libraryName)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->libraryName = $libraryName;
    }

}
