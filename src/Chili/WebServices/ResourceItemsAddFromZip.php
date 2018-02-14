<?php

namespace Chili\WebServices;

class ResourceItemsAddFromZip
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
     * @var string $fileData
     * @access public
     */
    public $fileData = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $folderPath
     * @param string $fileData
     * @access public
     */
    public function __construct($apiKey, $resourceName, $folderPath, $fileData)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->folderPath = $folderPath;
      $this->fileData = $fileData;
    }

}
