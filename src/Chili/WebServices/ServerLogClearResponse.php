<?php

namespace Chili\WebServices;

class ServerLogClearResponse
{

    /**
     * @var string $ServerLogClearResult
     * @access public
     */
    public $ServerLogClearResult = null;

    /**
     * @param string $ServerLogClearResult
     * @access public
     */
    public function __construct($ServerLogClearResult)
    {
      $this->ServerLogClearResult = $ServerLogClearResult;
    }

}
