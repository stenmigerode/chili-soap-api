<?php

namespace Chili\WebServices;

class ResourceItemGetCustomMetaData
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
     * @var string $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $setName
     * @access public
     */
    public $setName = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $id
     * @param string $setName
     * @access public
     */
    public function __construct($apiKey, $resourceName, $id, $setName)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->id = $id;
      $this->setName = $setName;
    }

}
