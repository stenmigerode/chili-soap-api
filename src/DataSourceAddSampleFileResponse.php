<?php

namespace Chili\WebServices;

class DataSourceAddSampleFileResponse
{

    /**
     * @var string $DataSourceAddSampleFileResult
     * @access public
     */
    public $DataSourceAddSampleFileResult = null;

    /**
     * @param string $DataSourceAddSampleFileResult
     * @access public
     */
    public function __construct($DataSourceAddSampleFileResult)
    {
      $this->DataSourceAddSampleFileResult = $DataSourceAddSampleFileResult;
    }

}
