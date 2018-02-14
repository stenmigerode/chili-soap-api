<?php

namespace Chili\WebServices;

class ResourceGetHistory
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
     * @param string $apiKey
     * @param string $resourceName
     * @access public
     */
    public function __construct($apiKey, $resourceName)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
    }

}
