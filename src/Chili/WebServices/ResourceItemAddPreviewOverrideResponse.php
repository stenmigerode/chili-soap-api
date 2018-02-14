<?php

namespace Chili\WebServices;

class ResourceItemAddPreviewOverrideResponse
{

    /**
     * @var string $ResourceItemAddPreviewOverrideResult
     * @access public
     */
    public $ResourceItemAddPreviewOverrideResult = null;

    /**
     * @param string $ResourceItemAddPreviewOverrideResult
     * @access public
     */
    public function __construct($ResourceItemAddPreviewOverrideResult)
    {
      $this->ResourceItemAddPreviewOverrideResult = $ResourceItemAddPreviewOverrideResult;
    }

}
