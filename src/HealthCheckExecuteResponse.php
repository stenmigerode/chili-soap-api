<?php

namespace Chili\WebServices;

class HealthCheckExecuteResponse
{

    /**
     * @var string $HealthCheckExecuteResult
     * @access public
     */
    public $HealthCheckExecuteResult = null;

    /**
     * @param string $HealthCheckExecuteResult
     * @access public
     */
    public function __construct($HealthCheckExecuteResult)
    {
      $this->HealthCheckExecuteResult = $HealthCheckExecuteResult;
    }

}
