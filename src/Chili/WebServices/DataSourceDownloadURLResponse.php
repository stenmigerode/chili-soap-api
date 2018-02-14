<?php

namespace Chili\WebServices;

class DataSourceDownloadURLResponse
{

    /**
     * @var string $DataSourceDownloadURLResult
     * @access public
     */
    public $DataSourceDownloadURLResult = null;

    /**
     * @param string $DataSourceDownloadURLResult
     * @access public
     */
    public function __construct($DataSourceDownloadURLResult)
    {
      $this->DataSourceDownloadURLResult = $DataSourceDownloadURLResult;
    }

}
