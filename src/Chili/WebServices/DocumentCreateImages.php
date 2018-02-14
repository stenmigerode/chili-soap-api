<?php

namespace Chili\WebServices;

class DocumentCreateImages
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
     * @var string $imageConversionProfileID
     * @access public
     */
    public $imageConversionProfileID = null;

    /**
     * @var int $taskPriority
     * @access public
     */
    public $taskPriority = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $settingsXML
     * @param string $imageConversionProfileID
     * @param int $taskPriority
     * @access public
     */
    public function __construct($apiKey, $itemID, $settingsXML, $imageConversionProfileID, $taskPriority)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->settingsXML = $settingsXML;
      $this->imageConversionProfileID = $imageConversionProfileID;
      $this->taskPriority = $taskPriority;
    }

}
