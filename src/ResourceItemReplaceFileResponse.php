<?php

namespace Chili\WebServices;

class ResourceItemReplaceFileResponse
{

    /**
     * @var string $ResourceItemReplaceFileResult
     * @access public
     */
    public $ResourceItemReplaceFileResult = null;

    /**
     * @param string $ResourceItemReplaceFileResult
     * @access public
     */
    public function __construct($ResourceItemReplaceFileResult)
    {
      $this->ResourceItemReplaceFileResult = $ResourceItemReplaceFileResult;
    }

}
