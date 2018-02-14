<?php

namespace Chili\WebServices;

class ResourceItemGetByPath
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
     * @var string $itemPath
     * @access public
     */
    public $itemPath = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemPath
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemPath)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemPath = $itemPath;
    }

}
