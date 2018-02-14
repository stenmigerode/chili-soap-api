<?php

namespace Chili\WebServices;

class ResourceFolderAddResponse
{

    /**
     * @var string $ResourceFolderAddResult
     * @access public
     */
    public $ResourceFolderAddResult = null;

    /**
     * @param string $ResourceFolderAddResult
     * @access public
     */
    public function __construct($ResourceFolderAddResult)
    {
      $this->ResourceFolderAddResult = $ResourceFolderAddResult;
    }

}
