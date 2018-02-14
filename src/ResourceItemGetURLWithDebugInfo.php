<?php

namespace Chili\WebServices;

class ResourceItemGetURLWithDebugInfo
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
     * @var string $type
     * @access public
     */
    public $type = null;

    /**
     * @var int $pageNum
     * @access public
     */
    public $pageNum = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $itemID
     * @param string $type
     * @param int $pageNum
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemID, $type, $pageNum)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemID = $itemID;
      $this->type = $type;
      $this->pageNum = $pageNum;
    }

}
