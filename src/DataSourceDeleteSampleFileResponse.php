<?php

namespace Chili\WebServices;

class DataSourceDeleteSampleFileResponse
{

    /**
     * @var string $DataSourceDeleteSampleFileResult
     * @access public
     */
    public $DataSourceDeleteSampleFileResult = null;

    /**
     * @param string $DataSourceDeleteSampleFileResult
     * @access public
     */
    public function __construct($DataSourceDeleteSampleFileResult)
    {
      $this->DataSourceDeleteSampleFileResult = $DataSourceDeleteSampleFileResult;
    }

}
