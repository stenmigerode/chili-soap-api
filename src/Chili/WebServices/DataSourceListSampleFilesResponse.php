<?php

namespace Chili\WebServices;

class DataSourceListSampleFilesResponse
{

    /**
     * @var string $DataSourceListSampleFilesResult
     * @access public
     */
    public $DataSourceListSampleFilesResult = null;

    /**
     * @param string $DataSourceListSampleFilesResult
     * @access public
     */
    public function __construct($DataSourceListSampleFilesResult)
    {
      $this->DataSourceListSampleFilesResult = $DataSourceListSampleFilesResult;
    }

}
