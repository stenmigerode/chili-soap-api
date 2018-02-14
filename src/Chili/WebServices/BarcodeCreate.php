<?php

namespace Chili\WebServices;

class BarcodeCreate
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $barcodeTypeID
     * @access public
     */
    public $barcodeTypeID = null;

    /**
     * @var string $barcodeText
     * @access public
     */
    public $barcodeText = null;

    /**
     * @param string $apiKey
     * @param string $barcodeTypeID
     * @param string $barcodeText
     * @access public
     */
    public function __construct($apiKey, $barcodeTypeID, $barcodeText)
    {
      $this->apiKey = $apiKey;
      $this->barcodeTypeID = $barcodeTypeID;
      $this->barcodeText = $barcodeText;
    }

}
