<?php

namespace Chili\WebServices;

class ResourceFolderDelete
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
     * @var string $relativePath
     * @access public
     */
    public $relativePath = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $relativePath
     * @access public
     */
    public function __construct($apiKey, $resourceName, $relativePath)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->relativePath = $relativePath;
    }

}
