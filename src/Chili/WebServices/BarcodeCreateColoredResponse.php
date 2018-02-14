<?php

namespace Chili\WebServices;

class BarcodeCreateColoredResponse
{

    /**
     * @var string $BarcodeCreateColoredResult
     * @access public
     */
    public $BarcodeCreateColoredResult = null;

    /**
     * @param string $BarcodeCreateColoredResult
     * @access public
     */
    public function __construct($BarcodeCreateColoredResult)
    {
      $this->BarcodeCreateColoredResult = $BarcodeCreateColoredResult;
    }

}
