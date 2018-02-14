<?php

namespace Chili\WebServices;

class DocumentCreateODF
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
     * @var string $settingsXML
     * @access public
     */
    public $settingsXML = null;

    /**
     * @var int $taskPriority
     * @access public
     */
    public $taskPriority = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $settingsXML
     * @param int $taskPriority
     * @access public
     */
    public function __construct($apiKey, $itemID, $settingsXML, $taskPriority)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->settingsXML = $settingsXML;
      $this->taskPriority = $taskPriority;
    }

}
