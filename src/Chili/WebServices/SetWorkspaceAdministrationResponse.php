<?php

namespace Chili\WebServices;

class SetWorkspaceAdministrationResponse
{

    /**
     * @var string $SetWorkspaceAdministrationResult
     * @access public
     */
    public $SetWorkspaceAdministrationResult = null;

    /**
     * @param string $SetWorkspaceAdministrationResult
     * @access public
     */
    public function __construct($SetWorkspaceAdministrationResult)
    {
      $this->SetWorkspaceAdministrationResult = $SetWorkspaceAdministrationResult;
    }

}
