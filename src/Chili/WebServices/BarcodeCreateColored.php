<?php

namespace Chili\WebServices;

class BarcodeCreateColored
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
     * @var string $backColor
     * @access public
     */
    public $backColor = null;

    /**
     * @var string $barColor
     * @access public
     */
    public $barColor = null;

    /**
     * @var string $textColor
     * @access public
     */
    public $textColor = null;

    /**
     * @param string $apiKey
     * @param string $barcodeTypeID
     * @param string $barcodeText
     * @param string $backColor
     * @param string $barColor
     * @param string $textColor
     * @access public
     */
    public function __construct($apiKey, $barcodeTypeID, $barcodeText, $backColor, $barColor, $textColor)
    {
      $this->apiKey = $apiKey;
      $this->barcodeTypeID = $barcodeTypeID;
      $this->barcodeText = $barcodeText;
      $this->backColor = $backColor;
      $this->barColor = $barColor;
      $this->textColor = $textColor;
    }

}
