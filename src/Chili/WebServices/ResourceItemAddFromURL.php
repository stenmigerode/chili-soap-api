<?php

namespace Chili\WebServices;

class ResourceItemAddFromURL
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
     * @var string $url
     * @access public
     */
    public $url = null;

    /**
     * @var string $login
     * @access public
     */
    public $login = null;

    /**
     * @var string $pw
     * @access public
     */
    public $pw = null;

    /**
     * @var boolean $reuseExisting
     * @access public
     */
    public $reuseExisting = null;

    /**
     * @var string $previewFileURL
     * @access public
     */
    public $previewFileURL = null;

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
     * @param string $url
     * @param string $login
     * @param string $pw
     * @param boolean $reuseExisting
     * @param string $previewFileURL
     * @param string $previewExtension
     * @param boolean $isPermanentPreview
     * @access public
     */
    public function __construct($apiKey, $resourceName, $newName, $folderPath, $url, $login, $pw, $reuseExisting, $previewFileURL, $previewExtension, $isPermanentPreview)
    {
      $this->apiKey = $apiKey;
      $this->resourceName = $resourceName;
      $this->newName = $newName;
      $this->folderPath = $folderPath;
      $this->url = $url;
      $this->login = $login;
      $this->pw = $pw;
      $this->reuseExisting = $reuseExisting;
      $this->previewFileURL = $previewFileURL;
      $this->previewExtension = $previewExtension;
      $this->isPermanentPreview = $isPermanentPreview;
    }

}
