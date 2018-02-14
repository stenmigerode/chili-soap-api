<?php

namespace Chili\WebServices;

class ServerGetLoggingSettingsResponse
{

    /**
     * @var string $ServerGetLoggingSettingsResult
     * @access public
     */
    public $ServerGetLoggingSettingsResult = null;

    /**
     * @param string $ServerGetLoggingSettingsResult
     * @access public
     */
    public function __construct($ServerGetLoggingSettingsResult)
    {
      $this->ServerGetLoggingSettingsResult = $ServerGetLoggingSettingsResult;
    }

}
