<?php

namespace Chili\WebServices;

class ResourceFolderCopyResponse
{

    /**
     * @var string $ResourceFolderCopyResult
     * @access public
     */
    public $ResourceFolderCopyResult = null;

    /**
     * @param string $ResourceFolderCopyResult
     * @access public
     */
    public function __construct($ResourceFolderCopyResult)
    {
      $this->ResourceFolderCopyResult = $ResourceFolderCopyResult;
    }

}
