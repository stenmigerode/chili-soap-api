<?php

namespace Chili\WebServices;

class ServerGetSettingsResponse
{

    /**
     * @var string $ServerGetSettingsResult
     * @access public
     */
    public $ServerGetSettingsResult = null;

    /**
     * @param string $ServerGetSettingsResult
     * @access public
     */
    public function __construct($ServerGetSettingsResult)
    {
      $this->ServerGetSettingsResult = $ServerGetSettingsResult;
    }

}
