<?php

namespace Chili\WebServices;

class ResourceItemGetURLResponse
{

    /**
     * @var string $ResourceItemGetURLResult
     * @access public
     */
    public $ResourceItemGetURLResult = null;

    /**
     * @param string $ResourceItemGetURLResult
     * @access public
     */
    public function __construct($ResourceItemGetURLResult)
    {
      $this->ResourceItemGetURLResult = $ResourceItemGetURLResult;
    }

}
