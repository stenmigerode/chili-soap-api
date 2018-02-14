<?php

namespace Chili\WebServices;

class ResourceSearchByIDs
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
     * @var string $IDs
     * @access public
     */
    public $IDs = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $IDs
     * @access public
     */
    public function __construct($apiKey, $resourceName, $IDs)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->IDs = $IDs;
    }

}
