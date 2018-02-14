<?php

namespace Chili\WebServices;

class ResourceItemResetPreviewsResponse
{

    /**
     * @var string $ResourceItemResetPreviewsResult
     * @access public
     */
    public $ResourceItemResetPreviewsResult = null;

    /**
     * @param string $ResourceItemResetPreviewsResult
     * @access public
     */
    public function __construct($ResourceItemResetPreviewsResult)
    {
      $this->ResourceItemResetPreviewsResult = $ResourceItemResetPreviewsResult;
    }

}
