<?php

namespace Chili\WebServices;

class DataSourceSpreadsheetGetXML
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
     * @var string $spreadsheetID
     * @access public
     */
    public $spreadsheetID = null;

    /**
     * @param string $apiKey
     * @param string $dataSourceID
     * @param string $spreadsheetID
     * @access public
     */
    public function __construct($apiKey, $dataSourceID, $spreadsheetID)
    {
      $this->apiKey = $apiKey;
      $this->dataSourceID = $dataSourceID;
      $this->spreadsheetID = $spreadsheetID;
    }

}
