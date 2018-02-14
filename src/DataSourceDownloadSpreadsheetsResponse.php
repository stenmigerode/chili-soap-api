<?php

namespace Chili\WebServices;

class DataSourceDownloadSpreadsheetsResponse
{

    /**
     * @var string $DataSourceDownloadSpreadsheetsResult
     * @access public
     */
    public $DataSourceDownloadSpreadsheetsResult = null;

    /**
     * @param string $DataSourceDownloadSpreadsheetsResult
     * @access public
     */
    public function __construct($DataSourceDownloadSpreadsheetsResult)
    {
      $this->DataSourceDownloadSpreadsheetsResult = $DataSourceDownloadSpreadsheetsResult;
    }

}
