<?php

namespace Chili\WebServices;

class SetAutomaticPreviewGenerationResponse
{

    /**
     * @var string $SetAutomaticPreviewGenerationResult
     * @access public
     */
    public $SetAutomaticPreviewGenerationResult = null;

    /**
     * @param string $SetAutomaticPreviewGenerationResult
     * @access public
     */
    public function __construct($SetAutomaticPreviewGenerationResult)
    {
      $this->SetAutomaticPreviewGenerationResult = $SetAutomaticPreviewGenerationResult;
    }

}
