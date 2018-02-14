<?php

namespace Chili\WebServices;

class SwitchServerGetFlowListResponse
{

    /**
     * @var string $SwitchServerGetFlowListResult
     * @access public
     */
    public $SwitchServerGetFlowListResult = null;

    /**
     * @param string $SwitchServerGetFlowListResult
     * @access public
     */
    public function __construct($SwitchServerGetFlowListResult)
    {
      $this->SwitchServerGetFlowListResult = $SwitchServerGetFlowListResult;
    }

}
