<?php

namespace Chili\WebServices;

class DocumentCreateFromBlankDocTemplate
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
     * @var string $blankDocTemplateID
     * @access public
     */
    public $blankDocTemplateID = null;

    /**
     * @param string $apiKey
     * @param string $documentName
     * @param string $folderPath
     * @param string $blankDocTemplateID
     * @access public
     */
    public function __construct($apiKey, $documentName, $folderPath, $blankDocTemplateID)
    {
      $this->apiKey = $apiKey;
      $this->documentName = $documentName;
      $this->folderPath = $folderPath;
      $this->blankDocTemplateID = $blankDocTemplateID;
    }

}
