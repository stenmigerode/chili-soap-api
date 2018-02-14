<?php

namespace Chili\WebServices;

class ResourceItemGetCacheInfoResponse
{

    /**
     * @var string $ResourceItemGetCacheInfoResult
     * @access public
     */
    public $ResourceItemGetCacheInfoResult = null;

    /**
     * @param string $ResourceItemGetCacheInfoResult
     * @access public
     */
    public function __construct($ResourceItemGetCacheInfoResult)
    {
      $this->ResourceItemGetCacheInfoResult = $ResourceItemGetCacheInfoResult;
    }

}
