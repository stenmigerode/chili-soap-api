<?php

namespace Chili\WebServices;

class GoogleCreateAuthorizationUrlResponse
{

    /**
     * @var string $GoogleCreateAuthorizationUrlResult
     * @access public
     */
    public $GoogleCreateAuthorizationUrlResult = null;

    /**
     * @param string $GoogleCreateAuthorizationUrlResult
     * @access public
     */
    public function __construct($GoogleCreateAuthorizationUrlResult)
    {
      $this->GoogleCreateAuthorizationUrlResult = $GoogleCreateAuthorizationUrlResult;
    }

}
