<?php

namespace Chili\WebServices;

class ResourceSearchInFolderResponse
{

    /**
     * @var string $ResourceSearchInFolderResult
     * @access public
     */
    public $ResourceSearchInFolderResult = null;

    /**
     * @param string $ResourceSearchInFolderResult
     * @access public
     */
    public function __construct($ResourceSearchInFolderResult)
    {
      $this->ResourceSearchInFolderResult = $ResourceSearchInFolderResult;
    }

}
