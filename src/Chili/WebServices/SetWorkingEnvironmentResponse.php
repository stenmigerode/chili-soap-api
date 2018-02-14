<?php

namespace Chili\WebServices;

class SetWorkingEnvironmentResponse
{

    /**
     * @var string $SetWorkingEnvironmentResult
     * @access public
     */
    public $SetWorkingEnvironmentResult = null;

    /**
     * @param string $SetWorkingEnvironmentResult
     * @access public
     */
    public function __construct($SetWorkingEnvironmentResult)
    {
      $this->SetWorkingEnvironmentResult = $SetWorkingEnvironmentResult;
    }

}
