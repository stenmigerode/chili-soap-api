<?php

namespace Chili\WebServices;

class ResourceItemGetByName
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
     * @var string $itemName
     * @access public
     */
    public $itemName = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemName
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemName)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemName = $itemName;
    }

}
