<?php

namespace Chili\WebServices;

class SwitchServerFlowGetCheckPointsResponse
{

    /**
     * @var string $SwitchServerFlowGetCheckPointsResult
     * @access public
     */
    public $SwitchServerFlowGetCheckPointsResult = null;

    /**
     * @param string $SwitchServerFlowGetCheckPointsResult
     * @access public
     */
    public function __construct($SwitchServerFlowGetCheckPointsResult)
    {
      $this->SwitchServerFlowGetCheckPointsResult = $SwitchServerFlowGetCheckPointsResult;
    }

}
