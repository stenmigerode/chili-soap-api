<?php

namespace Chili\WebServices;

class XinetSetCurrentCredentialsResponse
{

    /**
     * @var string $XinetSetCurrentCredentialsResult
     * @access public
     */
    public $XinetSetCurrentCredentialsResult = null;

    /**
     * @param string $XinetSetCurrentCredentialsResult
     * @access public
     */
    public function __construct($XinetSetCurrentCredentialsResult)
    {
      $this->XinetSetCurrentCredentialsResult = $XinetSetCurrentCredentialsResult;
    }

}
