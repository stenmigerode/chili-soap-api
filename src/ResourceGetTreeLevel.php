<?php

namespace Chili\WebServices;

class ResourceGetTreeLevel
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
     * @var string $parentFolder
     * @access public
     */
    public $parentFolder = null;

    /**
     * @var int $numLevels
     * @access public
     */
    public $numLevels = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $parentFolder
     * @param int $numLevels
     * @access public
     */
    public function __construct($apiKey, $resourceName, $parentFolder, $numLevels)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->parentFolder = $parentFolder;
      $this->numLevels = $numLevels;
    }

}
