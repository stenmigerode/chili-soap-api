<?php

namespace Chili\WebServices;

class ResourceSearchPaged
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
     * @var int $pageSize
     * @access public
     */
    public $pageSize = null;

    /**
     * @var int $pageNum
     * @access public
     */
    public $pageNum = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $name
     * @param int $pageSize
     * @param int $pageNum
     * @access public
     */
    public function __construct($apiKey, $resourceName, $name, $pageSize, $pageNum)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->name = $name;
      $this->pageSize = $pageSize;
      $this->pageNum = $pageNum;
    }

}
