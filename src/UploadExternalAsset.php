<?php

namespace Chili\WebServices;

class UploadExternalAsset
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $url
     * @access public
     */
    public $url = null;

    /**
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @var string $fileData
     * @access public
     */
    public $fileData = null;

    /**
     * @param string $apiKey
     * @param string $url
     * @param string $fileName
     * @param string $fileData
     * @access public
     */
    public function __construct($apiKey, $url, $fileName, $fileData)
    {
      $this->apiKey = $apiKey;
      $this->url = $url;
      $this->fileName = $fileName;
      $this->fileData = $fileData;
    }

}
