<?php

namespace Chili\WebServices;

class ResourceItemGetHistory
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
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemID
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemID)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemID = $itemID;
    }

}
