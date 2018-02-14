<?php

namespace Chili\WebServices;

class ResourceItemAddFromURLResponse
{

    /**
     * @var string $ResourceItemAddFromURLResult
     * @access public
     */
    public $ResourceItemAddFromURLResult = null;

    /**
     * @param string $ResourceItemAddFromURLResult
     * @access public
     */
    public function __construct($ResourceItemAddFromURLResult)
    {
      $this->ResourceItemAddFromURLResult = $ResourceItemAddFromURLResult;
    }

}
