<?php

namespace Chili\WebServices;

class ServerLicenseRequestResponse
{

    /**
     * @var string $ServerLicenseRequestResult
     * @access public
     */
    public $ServerLicenseRequestResult = null;

    /**
     * @param string $ServerLicenseRequestResult
     * @access public
     */
    public function __construct($ServerLicenseRequestResult)
    {
      $this->ServerLicenseRequestResult = $ServerLicenseRequestResult;
    }

}
