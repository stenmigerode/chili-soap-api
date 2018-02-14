<?php

namespace Chili\WebServices;

class ResourceItemGetByIdOrPathResponse
{

    /**
     * @var string $ResourceItemGetByIdOrPathResult
     * @access public
     */
    public $ResourceItemGetByIdOrPathResult = null;

    /**
     * @param string $ResourceItemGetByIdOrPathResult
     * @access public
     */
    public function __construct($ResourceItemGetByIdOrPathResult)
    {
      $this->ResourceItemGetByIdOrPathResult = $ResourceItemGetByIdOrPathResult;
    }

}
