<?php

namespace Chili\WebServices;

class GenerateApiKeyWithSettingsResponse
{

    /**
     * @var string $GenerateApiKeyWithSettingsResult
     * @access public
     */
    public $GenerateApiKeyWithSettingsResult = null;

    /**
     * @param string $GenerateApiKeyWithSettingsResult
     * @access public
     */
    public function __construct($GenerateApiKeyWithSettingsResult)
    {
      $this->GenerateApiKeyWithSettingsResult = $GenerateApiKeyWithSettingsResult;
    }

}
