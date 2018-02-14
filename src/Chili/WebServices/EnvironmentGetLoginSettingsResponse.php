<?php

namespace Chili\WebServices;

class EnvironmentGetLoginSettingsResponse
{

    /**
     * @var string $EnvironmentGetLoginSettingsResult
     * @access public
     */
    public $EnvironmentGetLoginSettingsResult = null;

    /**
     * @param string $EnvironmentGetLoginSettingsResult
     * @access public
     */
    public function __construct($EnvironmentGetLoginSettingsResult)
    {
      $this->EnvironmentGetLoginSettingsResult = $EnvironmentGetLoginSettingsResult;
    }

}
