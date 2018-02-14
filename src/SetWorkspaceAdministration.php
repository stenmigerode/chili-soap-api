<?php

namespace Chili\WebServices;

class SetWorkspaceAdministration
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var boolean $allowWorkspaceAdministration
     * @access public
     */
    public $allowWorkspaceAdministration = null;

    /**
     * @param string $apiKey
     * @param boolean $allowWorkspaceAdministration
     * @access public
     */
    public function __construct($apiKey, $allowWorkspaceAdministration)
    {
      $this->apiKey = $apiKey;
      $this->allowWorkspaceAdministration = $allowWorkspaceAdministration;
    }

}
