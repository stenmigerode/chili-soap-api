<?php

namespace Chili\WebServices;

class ResourceSearchPagedWithSorting
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
     * @var string $parentFolderPath
     * @access public
     */
    public $parentFolderPath = null;

    /**
     * @var boolean $includeSubDirectories
     * @access public
     */
    public $includeSubDirectories = null;

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
     * @var string $sortOn
     * @access public
     */
    public $sortOn = null;

    /**
     * @var string $sortOrder
     * @access public
     */
    public $sortOrder = null;

    /**
     * @var string $itemID
     * @access public
     */
    public $itemID = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $parentFolderPath
     * @param boolean $includeSubDirectories
     * @param string $name
     * @param int $pageSize
     * @param int $pageNum
     * @param string $sortOn
     * @param string $sortOrder
     * @param string $itemID
     * @access public
     */
    public function __construct($apiKey, $resourceName, $parentFolderPath, $includeSubDirectories, $name, $pageSize, $pageNum, $sortOn, $sortOrder, $itemID)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->parentFolderPath = $parentFolderPath;
      $this->includeSubDirectories = $includeSubDirectories;
      $this->name = $name;
      $this->pageSize = $pageSize;
      $this->pageNum = $pageNum;
      $this->sortOn = $sortOn;
      $this->sortOrder = $sortOrder;
      $this->itemID = $itemID;
    }

}
