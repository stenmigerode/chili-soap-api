<?php

namespace Chili\WebServices;

class ResourceItemCopyResponse
{

    /**
     * @var string $ResourceItemCopyResult
     * @access public
     */
    public $ResourceItemCopyResult = null;

    /**
     * @param string $ResourceItemCopyResult
     * @access public
     */
    public function __construct($ResourceItemCopyResult)
    {
      $this->ResourceItemCopyResult = $ResourceItemCopyResult;
    }

}
