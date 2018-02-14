<?php

namespace Chili\WebServices;

class ServerGetSystemInfoResponse
{

    /**
     * @var string $ServerGetSystemInfoResult
     * @access public
     */
    public $ServerGetSystemInfoResult = null;

    /**
     * @param string $ServerGetSystemInfoResult
     * @access public
     */
    public function __construct($ServerGetSystemInfoResult)
    {
      $this->ServerGetSystemInfoResult = $ServerGetSystemInfoResult;
    }

}
