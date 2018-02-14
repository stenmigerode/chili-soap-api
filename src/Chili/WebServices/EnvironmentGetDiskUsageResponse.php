<?php

namespace Chili\WebServices;

class EnvironmentGetDiskUsageResponse
{

    /**
     * @var string $EnvironmentGetDiskUsageResult
     * @access public
     */
    public $EnvironmentGetDiskUsageResult = null;

    /**
     * @param string $EnvironmentGetDiskUsageResult
     * @access public
     */
    public function __construct($EnvironmentGetDiskUsageResult)
    {
      $this->EnvironmentGetDiskUsageResult = $EnvironmentGetDiskUsageResult;
    }

}
