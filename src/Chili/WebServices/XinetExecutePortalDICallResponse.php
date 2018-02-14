<?php

namespace Chili\WebServices;

class XinetExecutePortalDICallResponse
{

    /**
     * @var string $XinetExecutePortalDICallResult
     * @access public
     */
    public $XinetExecutePortalDICallResult = null;

    /**
     * @param string $XinetExecutePortalDICallResult
     * @access public
     */
    public function __construct($XinetExecutePortalDICallResult)
    {
      $this->XinetExecutePortalDICallResult = $XinetExecutePortalDICallResult;
    }

}
