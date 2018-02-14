<?php

namespace Chili\WebServices;

class SwitchServerTestConnectionResponse
{

    /**
     * @var string $SwitchServerTestConnectionResult
     * @access public
     */
    public $SwitchServerTestConnectionResult = null;

    /**
     * @param string $SwitchServerTestConnectionResult
     * @access public
     */
    public function __construct($SwitchServerTestConnectionResult)
    {
      $this->SwitchServerTestConnectionResult = $SwitchServerTestConnectionResult;
    }

}
