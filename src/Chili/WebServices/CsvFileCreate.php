<?php

namespace Chili\WebServices;

class CsvFileCreate
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $xmlData
     * @access public
     */
    public $xmlData = null;

    /**
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @param string $apiKey
     * @param string $xmlData
     * @param string $fileName
     * @access public
     */
    public function __construct($apiKey, $xmlData, $fileName)
    {
      $this->apiKey = $apiKey;
      $this->xmlData = $xmlData;
      $this->fileName = $fileName;
    }

}
