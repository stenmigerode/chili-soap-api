<?php

namespace Chili\WebServices;

class EnvironmentGetSettingsResponse
{

    /**
     * @var string $EnvironmentGetSettingsResult
     * @access public
     */
    public $EnvironmentGetSettingsResult = null;

    /**
     * @param string $EnvironmentGetSettingsResult
     * @access public
     */
    public function __construct($EnvironmentGetSettingsResult)
    {
      $this->EnvironmentGetSettingsResult = $EnvironmentGetSettingsResult;
    }

}
