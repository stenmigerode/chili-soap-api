<?php

namespace Chili\WebServices;

class DataSourceSpreadsheetGetXMLResponse
{

    /**
     * @var string $DataSourceSpreadsheetGetXMLResult
     * @access public
     */
    public $DataSourceSpreadsheetGetXMLResult = null;

    /**
     * @param string $DataSourceSpreadsheetGetXMLResult
     * @access public
     */
    public function __construct($DataSourceSpreadsheetGetXMLResult)
    {
      $this->DataSourceSpreadsheetGetXMLResult = $DataSourceSpreadsheetGetXMLResult;
    }

}
