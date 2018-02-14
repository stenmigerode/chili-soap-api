<?php

namespace Chili\WebServices;

class ResourceItemAddWithPreviewResponse
{

    /**
     * @var string $ResourceItemAddWithPreviewResult
     * @access public
     */
    public $ResourceItemAddWithPreviewResult = null;

    /**
     * @param string $ResourceItemAddWithPreviewResult
     * @access public
     */
    public function __construct($ResourceItemAddWithPreviewResult)
    {
      $this->ResourceItemAddWithPreviewResult = $ResourceItemAddWithPreviewResult;
    }

}
