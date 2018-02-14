<?php

namespace Chili\WebServices;

class ServerSaveLoggingSettingsResponse
{

    /**
     * @var string $ServerSaveLoggingSettingsResult
     * @access public
     */
    public $ServerSaveLoggingSettingsResult = null;

    /**
     * @param string $ServerSaveLoggingSettingsResult
     * @access public
     */
    public function __construct($ServerSaveLoggingSettingsResult)
    {
      $this->ServerSaveLoggingSettingsResult = $ServerSaveLoggingSettingsResult;
    }

}
