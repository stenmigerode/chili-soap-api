<?php

namespace Chili\WebServices;

class DataSourceAddSampleFile
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
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @var string $fileOrData
     * @access public
     */
    public $fileOrData = null;

    /**
     * @param string $apiKey
     * @param string $dataSourceID
     * @param string $fileName
     * @param string $fileOrData
     * @access public
     */
    public function __construct($apiKey, $dataSourceID, $fileName, $fileOrData)
    {
      $this->apiKey = $apiKey;
      $this->dataSourceID = $dataSourceID;
      $this->fileName = $fileName;
      $this->fileOrData = $fileOrData;
    }

}
