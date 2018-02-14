<?php

namespace Chili\WebServices;

class SetContentAdministrationResponse
{

    /**
     * @var string $SetContentAdministrationResult
     * @access public
     */
    public $SetContentAdministrationResult = null;

    /**
     * @param string $SetContentAdministrationResult
     * @access public
     */
    public function __construct($SetContentAdministrationResult)
    {
      $this->SetContentAdministrationResult = $SetContentAdministrationResult;
    }

}
