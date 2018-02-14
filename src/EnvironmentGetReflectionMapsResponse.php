<?php

namespace Chili\WebServices;

class EnvironmentGetReflectionMapsResponse
{

    /**
     * @var string $EnvironmentGetReflectionMapsResult
     * @access public
     */
    public $EnvironmentGetReflectionMapsResult = null;

    /**
     * @param string $EnvironmentGetReflectionMapsResult
     * @access public
     */
    public function __construct($EnvironmentGetReflectionMapsResult)
    {
      $this->EnvironmentGetReflectionMapsResult = $EnvironmentGetReflectionMapsResult;
    }

}
