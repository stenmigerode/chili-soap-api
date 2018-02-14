<?php

namespace Chili\WebServices;

class EnvironmentListResponse
{

    /**
     * @var string $EnvironmentListResult
     * @access public
     */
    public $EnvironmentListResult = null;

    /**
     * @param string $EnvironmentListResult
     * @access public
     */
    public function __construct($EnvironmentListResult)
    {
      $this->EnvironmentListResult = $EnvironmentListResult;
    }

}
