<?php

namespace Chili\WebServices;

class DocumentGetDefaultSettingsResponse
{

    /**
     * @var string $DocumentGetDefaultSettingsResult
     * @access public
     */
    public $DocumentGetDefaultSettingsResult = null;

    /**
     * @param string $DocumentGetDefaultSettingsResult
     * @access public
     */
    public function __construct($DocumentGetDefaultSettingsResult)
    {
      $this->DocumentGetDefaultSettingsResult = $DocumentGetDefaultSettingsResult;
    }

}
