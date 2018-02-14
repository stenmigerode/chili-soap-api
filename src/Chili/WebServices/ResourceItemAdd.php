<?php

namespace Chili\WebServices;

class ResourceItemAdd
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
     * @var string $folderPath
     * @access public
     */
    public $folderPath = null;

    /**
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @var string $fileData
     * @access public
     */
    public $fileData = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $newName
     * @param string $folderPath
     * @param string $xml
     * @param string $fileData
     * @access public
     */
    public function __construct($apiKey, $resourceName, $newName, $folderPath, $xml, $fileData)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->newName = $newName;
      $this->folderPath = $folderPath;
      $this->xml = $xml;
      $this->fileData = $fileData;
    }

}
