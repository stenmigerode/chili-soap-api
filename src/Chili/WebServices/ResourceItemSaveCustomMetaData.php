<?php

namespace Chili\WebServices;

class ResourceItemSaveCustomMetaData
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
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $id
     * @param string $setName
     * @param string $xml
     * @access public
     */
    public function __construct($apiKey, $resourceName, $id, $setName, $xml)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->id = $id;
      $this->setName = $setName;
      $this->xml = $xml;
    }

}
