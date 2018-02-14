<?php

namespace Chili\WebServices;

class ServerSaveSettingsResponse
{

    /**
     * @var string $ServerSaveSettingsResult
     * @access public
     */
    public $ServerSaveSettingsResult = null;

    /**
     * @param string $ServerSaveSettingsResult
     * @access public
     */
    public function __construct($ServerSaveSettingsResult)
    {
      $this->ServerSaveSettingsResult = $ServerSaveSettingsResult;
    }

}
