<?php

namespace Chili\WebServices;

class DocumentCreateFromODT
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $documentName
     * @access public
     */
    public $documentName = null;

    /**
     * @var string $folderPath
     * @access public
     */
    public $folderPath = null;

    /**
     * @var string $odtPathOrData
     * @access public
     */
    public $odtPathOrData = null;

    /**
     * @var string $settingsXML
     * @access public
     */
    public $settingsXML = null;

    /**
     * @param string $apiKey
     * @param string $documentName
     * @param string $folderPath
     * @param string $odtPathOrData
     * @param string $settingsXML
     * @access public
     */
    public function __construct($apiKey, $documentName, $folderPath, $odtPathOrData, $settingsXML)
    {
      $this->apiKey = $apiKey;
      $this->documentName = $documentName;
      $this->folderPath = $folderPath;
      $this->odtPathOrData = $odtPathOrData;
      $this->settingsXML = $settingsXML;
    }

}
