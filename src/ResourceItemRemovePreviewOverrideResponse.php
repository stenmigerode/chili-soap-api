<?php

namespace Chili\WebServices;

class ResourceItemRemovePreviewOverrideResponse
{

    /**
     * @var string $ResourceItemRemovePreviewOverrideResult
     * @access public
     */
    public $ResourceItemRemovePreviewOverrideResult = null;

    /**
     * @param string $ResourceItemRemovePreviewOverrideResult
     * @access public
     */
    public function __construct($ResourceItemRemovePreviewOverrideResult)
    {
      $this->ResourceItemRemovePreviewOverrideResult = $ResourceItemRemovePreviewOverrideResult;
    }

}
