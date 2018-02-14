<?php

namespace Chili\WebServices;

class ResourceItemAddPreviewOverride
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
     * @var string $itemID
     * @access public
     */
    public $itemID = null;

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
     * @param string $itemID
     * @param string $previewFileData
     * @param string $previewExtension
     * @param boolean $isPermanentPreview
     * @access public
     */
    public function __construct($apiKey, $resourceName, $itemID, $previewFileData, $previewExtension, $isPermanentPreview)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->itemID = $itemID;
      $this->previewFileData = $previewFileData;
      $this->previewExtension = $previewExtension;
      $this->isPermanentPreview = $isPermanentPreview;
    }

}
