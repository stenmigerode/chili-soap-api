<?php

namespace Chili\WebServices;

class DataSourceFileGetXML
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $dataSourceID
     * @access public
     */
    public $dataSourceID = null;

    /**
     * @var string $fileDataOrPath
     * @access public
     */
    public $fileDataOrPath = null;

    /**
     * @var string $fileExtension
     * @access public
     */
    public $fileExtension = null;

    /**
     * @param string $apiKey
     * @param string $dataSourceID
     * @param string $fileDataOrPath
     * @param string $fileExtension
     * @access public
     */
    public function __construct($apiKey, $dataSourceID, $fileDataOrPath, $fileExtension)
    {
      $this->apiKey = $apiKey;
      $this->dataSourceID = $dataSourceID;
      $this->fileDataOrPath = $fileDataOrPath;
      $this->fileExtension = $fileExtension;
    }

}
