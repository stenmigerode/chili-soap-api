<?php

namespace Chili\WebServices;

class ApiKeyKeepAliveResponse
{

    /**
     * @var string $ApiKeyKeepAliveResult
     * @access public
     */
    public $ApiKeyKeepAliveResult = null;

    /**
     * @param string $ApiKeyKeepAliveResult
     * @access public
     */
    public function __construct($ApiKeyKeepAliveResult)
    {
      $this->ApiKeyKeepAliveResult = $ApiKeyKeepAliveResult;
    }

}
