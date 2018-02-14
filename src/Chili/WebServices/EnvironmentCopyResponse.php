<?php

namespace Chili\WebServices;

class EnvironmentCopyResponse
{

    /**
     * @var string $EnvironmentCopyResult
     * @access public
     */
    public $EnvironmentCopyResult = null;

    /**
     * @param string $EnvironmentCopyResult
     * @access public
     */
    public function __construct($EnvironmentCopyResult)
    {
      $this->EnvironmentCopyResult = $EnvironmentCopyResult;
    }

}
