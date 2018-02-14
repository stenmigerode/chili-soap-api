<?php

namespace Chili\WebServices;

class ResourceItemCopy
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
     * @var string $itemID
     * @access public
     */
    public $itemID = null;

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
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemID
     * @param string $newName
     * @param string $folderPath
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemID, $newName, $folderPath)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemID = $itemID;
      $this->newName = $newName;
      $this->folderPath = $folderPath;
    }

}
