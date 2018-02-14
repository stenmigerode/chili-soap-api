<?php

namespace Chili\WebServices;

class AdsGetFromURLResponse
{

    /**
     * @var string $AdsGetFromURLResult
     * @access public
     */
    public $AdsGetFromURLResult = null;

    /**
     * @param string $AdsGetFromURLResult
     * @access public
     */
    public function __construct($AdsGetFromURLResult)
    {
      $this->AdsGetFromURLResult = $AdsGetFromURLResult;
    }

}
