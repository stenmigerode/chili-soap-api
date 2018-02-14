<?php

namespace Chili\WebServices;

class ResourceLibraryGetSettingsResponse
{

    /**
     * @var string $ResourceLibraryGetSettingsResult
     * @access public
     */
    public $ResourceLibraryGetSettingsResult = null;

    /**
     * @param string $ResourceLibraryGetSettingsResult
     * @access public
     */
    public function __construct($ResourceLibraryGetSettingsResult)
    {
      $this->ResourceLibraryGetSettingsResult = $ResourceLibraryGetSettingsResult;
    }

}
