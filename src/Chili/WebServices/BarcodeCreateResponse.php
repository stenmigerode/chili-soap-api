<?php

namespace Chili\WebServices;

class BarcodeCreateResponse
{

    /**
     * @var string $BarcodeCreateResult
     * @access public
     */
    public $BarcodeCreateResult = null;

    /**
     * @param string $BarcodeCreateResult
     * @access public
     */
    public function __construct($BarcodeCreateResult)
    {
      $this->BarcodeCreateResult = $BarcodeCreateResult;
    }

}
