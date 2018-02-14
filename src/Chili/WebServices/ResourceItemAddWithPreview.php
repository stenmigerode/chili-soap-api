<?php

namespace Chili\WebServices;

class ResourceItemAddWithPreview
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $resourceName
     * @access public
     */
    public $resourceName = null;

    /**
     * @var string $newName
     * @access public
     */
    public $newName = null;

    /**
     * @var string $folderPath
     * @access public
     */
    public $folderPath = null;

    /**
     * @var string $xml
     * @access public
     */
    public $xml = null;

    /**
     * @var string $fileData
     * @access public
     */
    public $fileData = null;

    /**
     * @var string $previewFileData
     * @access public
     */
    public $previewFileData = null;

    /**
     * @var string $previewExtension
     * @access public
     */
    public $previewExtension = null;

    /**
     * @var boolean $isPermanentPreview
     * @access public
     */
    public $isPermanentPreview = null;

    /**
     * @param string $apiKey
     * @param string $resourceName
     * @param string $newName
     * @param string $folderPath
     * @param string $xml
     * @param string $fileData
     * @param string $previewFileData
     * @param string $previewExtension
     * @param boolean $isPermanentPreview
     * @access public
     */
    public function __construct($apiKey, $resourceName, $newName, $folderPath, $xml, $fileData, $previewFileData, $previewExtension, $isPermanentPreview)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->newName = $newName;
      $this->folderPath = $folderPath;
      $this->xml = $xml;
      $this->fileData = $fileData;
      $this->previewFileData = $previewFileData;
      $this->previewExtension = $previewExtension;
      $this->isPermanentPreview = $isPermanentPreview;
    }

}
