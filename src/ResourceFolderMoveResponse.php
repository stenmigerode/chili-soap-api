<?php

namespace Chili\WebServices;

class ResourceFolderMoveResponse
{

    /**
     * @var string $ResourceFolderMoveResult
     * @access public
     */
    public $ResourceFolderMoveResult = null;

    /**
     * @param string $ResourceFolderMoveResult
     * @access public
     */
    public function __construct($ResourceFolderMoveResult)
    {
      $this->ResourceFolderMoveResult = $ResourceFolderMoveResult;
    }

}
