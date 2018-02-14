<?php

namespace Chili\WebServices;

class ResourceSearchInFolder
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
     * @var string $parentFolderPath
     * @access public
     */
    public $parentFolderPath = null;

    /**
     * @var boolean $includeSubDirectories
     * @access public
     */
    public $includeSubDirectories = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $parentFolderPath
     * @param boolean $includeSubDirectories
     * @param string $name
     * @access public
     */
    public function __construct($apiKey, $resourceName, $parentFolderPath, $includeSubDirectories, $name)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->parentFolderPath = $parentFolderPath;
      $this->includeSubDirectories = $includeSubDirectories;
      $this->name = $name;
    }

}
