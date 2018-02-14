<?php

namespace Chili\WebServices;

class ResourceItemAddResponse
{

    /**
     * @var string $ResourceItemAddResult
     * @access public
     */
    public $ResourceItemAddResult = null;

    /**
     * @param string $ResourceItemAddResult
     * @access public
     */
    public function __construct($ResourceItemAddResult)
    {
      $this->ResourceItemAddResult = $ResourceItemAddResult;
    }

}
