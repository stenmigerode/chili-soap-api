<?php

namespace Chili\WebServices;

class ResourceGetTree
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
     * @var string $parentFolder
     * @access public
     */
    public $parentFolder = null;

    /**
     * @var boolean $includeSubDirectories
     * @access public
     */
    public $includeSubDirectories = null;

    /**
     * @var boolean $includeFiles
     * @access public
     */
    public $includeFiles = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $parentFolder
     * @param boolean $includeSubDirectories
     * @param boolean $includeFiles
     * @access public
     */
    public function __construct($apiKey, $resourceName, $parentFolder, $includeSubDirectories, $includeFiles)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->parentFolder = $parentFolder;
      $this->includeSubDirectories = $includeSubDirectories;
      $this->includeFiles = $includeFiles;
    }

}
