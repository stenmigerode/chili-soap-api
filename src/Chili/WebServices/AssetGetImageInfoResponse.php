<?php

namespace Chili\WebServices;

class AssetGetImageInfoResponse
{

    /**
     * @var string $AssetGetImageInfoResult
     * @access public
     */
    public $AssetGetImageInfoResult = null;

    /**
     * @param string $AssetGetImageInfoResult
     * @access public
     */
    public function __construct($AssetGetImageInfoResult)
    {
      $this->AssetGetImageInfoResult = $AssetGetImageInfoResult;
    }

}
