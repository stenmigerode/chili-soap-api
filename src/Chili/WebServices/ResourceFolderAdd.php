<?php

namespace Chili\WebServices;

class ResourceFolderAdd
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
     * @var string $newName
     * @access public
     */
    public $newName = null;

    /**
     * @var string $parentPath
     * @access public
     */
    public $parentPath = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $newName
     * @param string $parentPath
     * @access public
     */
    public function __construct($apiKey, $resourceName, $newName, $parentPath)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->newName = $newName;
      $this->parentPath = $parentPath;
    }

}
