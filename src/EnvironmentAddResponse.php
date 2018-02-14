<?php

namespace Chili\WebServices;

class EnvironmentAddResponse
{

    /**
     * @var string $EnvironmentAddResult
     * @access public
     */
    public $EnvironmentAddResult = null;

    /**
     * @param string $EnvironmentAddResult
     * @access public
     */
    public function __construct($EnvironmentAddResult)
    {
      $this->EnvironmentAddResult = $EnvironmentAddResult;
    }

}
