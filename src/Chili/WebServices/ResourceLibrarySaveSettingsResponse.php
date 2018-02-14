<?php

namespace Chili\WebServices;

class ResourceLibrarySaveSettingsResponse
{

    /**
     * @var string $ResourceLibrarySaveSettingsResult
     * @access public
     */
    public $ResourceLibrarySaveSettingsResult = null;

    /**
     * @param string $ResourceLibrarySaveSettingsResult
     * @access public
     */
    public function __construct($ResourceLibrarySaveSettingsResult)
    {
      $this->ResourceLibrarySaveSettingsResult = $ResourceLibrarySaveSettingsResult;
    }

}
