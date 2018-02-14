<?php

namespace Chili\WebServices;

class SwitchServerFlowSubmitFileToFolder
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
     * @param string $apiKey
     * @param string $switchServerID
     * @param string $flowID
     * @param string $elementID
     * @param string $filePathOrData
     * @param string $fileName
     * @access public
     */
    public function __construct($apiKey, $switchServerID, $flowID, $elementID, $filePathOrData, $fileName)
    {
      $this->apiKey = $apiKey;
      $this->switchServerID = $switchServerID;
      $this->flowID = $flowID;
      $this->elementID = $elementID;
      $this->filePathOrData = $filePathOrData;
      $this->fileName = $fileName;
    }

}
