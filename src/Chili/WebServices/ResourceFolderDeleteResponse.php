<?php

namespace Chili\WebServices;

class ResourceFolderDeleteResponse
{

    /**
     * @var string $ResourceFolderDeleteResult
     * @access public
     */
    public $ResourceFolderDeleteResult = null;

    /**
     * @param string $ResourceFolderDeleteResult
     * @access public
     */
    public function __construct($ResourceFolderDeleteResult)
    {
      $this->ResourceFolderDeleteResult = $ResourceFolderDeleteResult;
    }

}
