<?php

namespace Chili\WebServices;

class ResourceItemReplaceFile
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
     * @var string $fileData
     * @access public
     */
    public $fileData = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemID
     * @param string $fileData
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemID, $fileData)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemID = $itemID;
      $this->fileData = $fileData;
    }

}
