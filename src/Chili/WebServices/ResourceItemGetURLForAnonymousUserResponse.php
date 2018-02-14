<?php

namespace Chili\WebServices;

class ResourceItemGetURLForAnonymousUserResponse
{

    /**
     * @var string $ResourceItemGetURLForAnonymousUserResult
     * @access public
     */
    public $ResourceItemGetURLForAnonymousUserResult = null;

    /**
     * @param string $ResourceItemGetURLForAnonymousUserResult
     * @access public
     */
    public function __construct($ResourceItemGetURLForAnonymousUserResult)
    {
      $this->ResourceItemGetURLForAnonymousUserResult = $ResourceItemGetURLForAnonymousUserResult;
    }

}
