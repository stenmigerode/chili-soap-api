<?php

namespace Chili\WebServices;

class ResourceItemGetPrivateInfoResponse
{

    /**
     * @var string $ResourceItemGetPrivateInfoResult
     * @access public
     */
    public $ResourceItemGetPrivateInfoResult = null;

    /**
     * @param string $ResourceItemGetPrivateInfoResult
     * @access public
     */
    public function __construct($ResourceItemGetPrivateInfoResult)
    {
      $this->ResourceItemGetPrivateInfoResult = $ResourceItemGetPrivateInfoResult;
    }

}
