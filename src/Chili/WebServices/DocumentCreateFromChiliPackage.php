<?php

namespace Chili\WebServices;

class DocumentCreateFromChiliPackage
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
     * @var string $packagePathOrData
     * @access public
     */
    public $packagePathOrData = null;

    /**
     * @var string $newAssetLocation
     * @access public
     */
    public $newAssetLocation = null;

    /**
     * @var string $newFontLocation
     * @access public
     */
    public $newFontLocation = null;

    /**
     * @param string $apiKey
     * @param string $documentName
     * @param string $folderPath
     * @param string $packagePathOrData
     * @param string $newAssetLocation
     * @param string $newFontLocation
     * @access public
     */
    public function __construct($apiKey, $documentName, $folderPath, $packagePathOrData, $newAssetLocation, $newFontLocation)
    {
      $this->apiKey = $apiKey;
      $this->documentName = $documentName;
      $this->folderPath = $folderPath;
      $this->packagePathOrData = $packagePathOrData;
      $this->newAssetLocation = $newAssetLocation;
      $this->newFontLocation = $newFontLocation;
    }

}
