<?php

namespace Chili\WebServices;

class ResourceItemGetByNameResponse
{

    /**
     * @var string $ResourceItemGetByNameResult
     * @access public
     */
    public $ResourceItemGetByNameResult = null;

    /**
     * @param string $ResourceItemGetByNameResult
     * @access public
     */
    public function __construct($ResourceItemGetByNameResult)
    {
      $this->ResourceItemGetByNameResult = $ResourceItemGetByNameResult;
    }

}
