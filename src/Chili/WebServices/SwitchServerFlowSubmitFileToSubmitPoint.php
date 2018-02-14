<?php

namespace Chili\WebServices;

class SwitchServerFlowSubmitFileToSubmitPoint
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $switchServerID
     * @access public
     */
    public $switchServerID = null;

    /**
     * @var string $flowID
     * @access public
     */
    public $flowID = null;

    /**
     * @var string $elementID
     * @access public
     */
    public $elementID = null;

    /**
     * @var string $filePathOrData
     * @access public
     */
    public $filePathOrData = null;

    /**
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @var string $metaXML
     * @access public
     */
    public $metaXML = null;

    /**
     * @param string $apiKey
     * @param string $switchServerID
     * @param string $flowID
     * @param string $elementID
     * @param string $filePathOrData
     * @param string $fileName
     * @param string $metaXML
     * @access public
     */
    public function __construct($apiKey, $switchServerID, $flowID, $elementID, $filePathOrData, $fileName, $metaXML)
    {
      $this->apiKey = $apiKey;
      $this->switchServerID = $switchServerID;
      $this->flowID = $flowID;
      $this->elementID = $elementID;
      $this->filePathOrData = $filePathOrData;
      $this->fileName = $fileName;
      $this->metaXML = $metaXML;
    }

}
