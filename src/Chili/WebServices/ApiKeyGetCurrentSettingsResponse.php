<?php

namespace Chili\WebServices;

class ApiKeyGetCurrentSettingsResponse
{

    /**
     * @var string $ApiKeyGetCurrentSettingsResult
     * @access public
     */
    public $ApiKeyGetCurrentSettingsResult = null;

    /**
     * @param string $ApiKeyGetCurrentSettingsResult
     * @access public
     */
    public function __construct($ApiKeyGetCurrentSettingsResult)
    {
      $this->ApiKeyGetCurrentSettingsResult = $ApiKeyGetCurrentSettingsResult;
    }

}
