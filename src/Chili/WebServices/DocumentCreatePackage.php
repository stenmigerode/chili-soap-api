<?php

namespace Chili\WebServices;

class DocumentCreatePackage
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $itemID
     * @access public
     */
    public $itemID = null;

    /**
     * @var int $taskPriority
     * @access public
     */
    public $taskPriority = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param int $taskPriority
     * @access public
     */
    public function __construct($apiKey, $itemID, $taskPriority)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->taskPriority = $taskPriority;
    }

}
