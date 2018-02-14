<?php

namespace Chili\WebServices;

class ServerGetLicenseInfoResponse
{

    /**
     * @var string $ServerGetLicenseInfoResult
     * @access public
     */
    public $ServerGetLicenseInfoResult = null;

    /**
     * @param string $ServerGetLicenseInfoResult
     * @access public
     */
    public function __construct($ServerGetLicenseInfoResult)
    {
      $this->ServerGetLicenseInfoResult = $ServerGetLicenseInfoResult;
    }

}
