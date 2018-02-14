<?php

namespace Chili\WebServices;

class EnvironmentSaveSettingsResponse
{

    /**
     * @var string $EnvironmentSaveSettingsResult
     * @access public
     */
    public $EnvironmentSaveSettingsResult = null;

    /**
     * @param string $EnvironmentSaveSettingsResult
     * @access public
     */
    public function __construct($EnvironmentSaveSettingsResult)
    {
      $this->EnvironmentSaveSettingsResult = $EnvironmentSaveSettingsResult;
    }

}
