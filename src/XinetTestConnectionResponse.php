<?php

namespace Chili\WebServices;

class XinetTestConnectionResponse
{

    /**
     * @var string $XinetTestConnectionResult
     * @access public
     */
    public $XinetTestConnectionResult = null;

    /**
     * @param string $XinetTestConnectionResult
     * @access public
     */
    public function __construct($XinetTestConnectionResult)
    {
      $this->XinetTestConnectionResult = $XinetTestConnectionResult;
    }

}
