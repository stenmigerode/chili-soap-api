<?php

namespace Chili\WebServices;

class EnvironmentGetCurrentResponse
{

    /**
     * @var string $EnvironmentGetCurrentResult
     * @access public
     */
    public $EnvironmentGetCurrentResult = null;

    /**
     * @param string $EnvironmentGetCurrentResult
     * @access public
     */
    public function __construct($EnvironmentGetCurrentResult)
    {
      $this->EnvironmentGetCurrentResult = $EnvironmentGetCurrentResult;
    }

}
