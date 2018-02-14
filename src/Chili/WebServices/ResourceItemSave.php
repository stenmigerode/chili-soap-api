<?php

namespace Chili\WebServices;

class ResourceItemSave
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
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemID
     * @param string $xml
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemID, $xml)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemID = $itemID;
      $this->xml = $xml;
    }

}
