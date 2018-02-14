<?php

namespace Chili\WebServices;

class EnvironmentGetColorProfilesResponse
{

    /**
     * @var string $EnvironmentGetColorProfilesResult
     * @access public
     */
    public $EnvironmentGetColorProfilesResult = null;

    /**
     * @param string $EnvironmentGetColorProfilesResult
     * @access public
     */
    public function __construct($EnvironmentGetColorProfilesResult)
    {
      $this->EnvironmentGetColorProfilesResult = $EnvironmentGetColorProfilesResult;
    }

}
