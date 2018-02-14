<?php

namespace Chili\WebServices;

class InterfaceGetInitialSettingsResponse
{

    /**
     * @var string $InterfaceGetInitialSettingsResult
     * @access public
     */
    public $InterfaceGetInitialSettingsResult = null;

    /**
     * @param string $InterfaceGetInitialSettingsResult
     * @access public
     */
    public function __construct($InterfaceGetInitialSettingsResult)
    {
      $this->InterfaceGetInitialSettingsResult = $InterfaceGetInitialSettingsResult;
    }

}
