<?php

namespace Chili\WebServices;

class SwitchServerFlowGetFullConfigResponse
{

    /**
     * @var string $SwitchServerFlowGetFullConfigResult
     * @access public
     */
    public $SwitchServerFlowGetFullConfigResult = null;

    /**
     * @param string $SwitchServerFlowGetFullConfigResult
     * @access public
     */
    public function __construct($SwitchServerFlowGetFullConfigResult)
    {
      $this->SwitchServerFlowGetFullConfigResult = $SwitchServerFlowGetFullConfigResult;
    }

}
