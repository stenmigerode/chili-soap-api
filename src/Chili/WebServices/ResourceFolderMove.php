<?php

namespace Chili\WebServices;

class ResourceFolderMove
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
     * @var string $folderPath
     * @access public
     */
    public $folderPath = null;

    /**
     * @var string $newFolderPath
     * @access public
     */
    public $newFolderPath = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $folderPath
     * @param string $newFolderPath
     * @access public
     */
    public function __construct($apiKey, $resourceName, $folderPath, $newFolderPath)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->folderPath = $folderPath;
      $this->newFolderPath = $newFolderPath;
    }

}
