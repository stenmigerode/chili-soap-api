<?php

namespace Chili\WebServices;

class DocumentCreateFromPDF
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
     * @var string $pdfPathOrData
     * @access public
     */
    public $pdfPathOrData = null;

    /**
     * @var string $backgroundAssetLocation
     * @access public
     */
    public $backgroundAssetLocation = null;

    /**
     * @param string $apiKey
     * @param string $documentName
     * @param string $folderPath
     * @param string $pdfPathOrData
     * @param string $backgroundAssetLocation
     * @access public
     */
    public function __construct($apiKey, $documentName, $folderPath, $pdfPathOrData, $backgroundAssetLocation)
    {
      $this->apiKey = $apiKey;
      $this->documentName = $documentName;
      $this->folderPath = $folderPath;
      $this->pdfPathOrData = $pdfPathOrData;
      $this->backgroundAssetLocation = $backgroundAssetLocation;
    }

}
