<?php

namespace Chili\WebServices;

class ResourceItemGetByIdOrPath
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
     * @var string $itemIdOrPath
     * @access public
     */
    public $itemIdOrPath = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemIdOrPath
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemIdOrPath)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemIdOrPath = $itemIdOrPath;
    }

}
