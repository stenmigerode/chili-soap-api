<?php

namespace Chili\WebServices;

class EnvironmentDeleteResponse
{

    /**
     * @var string $EnvironmentDeleteResult
     * @access public
     */
    public $EnvironmentDeleteResult = null;

    /**
     * @param string $EnvironmentDeleteResult
     * @access public
     */
    public function __construct($EnvironmentDeleteResult)
    {
      $this->EnvironmentDeleteResult = $EnvironmentDeleteResult;
    }

}
