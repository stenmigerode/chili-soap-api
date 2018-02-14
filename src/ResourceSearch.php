<?php

namespace Chili\WebServices;

class ResourceSearch
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
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $name
     * @access public
     */
    public function __construct($apiKey, $resourceName, $name)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->name = $name;
    }

}
