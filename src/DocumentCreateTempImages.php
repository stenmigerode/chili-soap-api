<?php

namespace Chili\WebServices;

class DocumentCreateTempImages
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
     * @var string $docXML
     * @access public
     */
    public $docXML = null;

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
     * @param string $docXML
     * @param string $settingsXML
     * @param string $imageConversionProfileID
     * @param int $taskPriority
     * @access public
     */
    public function __construct($apiKey, $itemID, $docXML, $settingsXML, $imageConversionProfileID, $taskPriority)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->docXML = $docXML;
      $this->settingsXML = $settingsXML;
      $this->imageConversionProfileID = $imageConversionProfileID;
      $this->taskPriority = $taskPriority;
    }

}
