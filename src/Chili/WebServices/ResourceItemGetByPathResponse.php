<?php

namespace Chili\WebServices;

class ResourceItemGetByPathResponse
{

    /**
     * @var string $ResourceItemGetByPathResult
     * @access public
     */
    public $ResourceItemGetByPathResult = null;

    /**
     * @param string $ResourceItemGetByPathResult
     * @access public
     */
    public function __construct($ResourceItemGetByPathResult)
    {
      $this->ResourceItemGetByPathResult = $ResourceItemGetByPathResult;
    }

}
