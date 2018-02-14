<?php

namespace Chili\WebServices;

class SwitchServerFlowGetJobsResponse
{

    /**
     * @var string $SwitchServerFlowGetJobsResult
     * @access public
     */
    public $SwitchServerFlowGetJobsResult = null;

    /**
     * @param string $SwitchServerFlowGetJobsResult
     * @access public
     */
    public function __construct($SwitchServerFlowGetJobsResult)
    {
      $this->SwitchServerFlowGetJobsResult = $SwitchServerFlowGetJobsResult;
    }

}
