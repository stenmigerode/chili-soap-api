<?php

namespace Chili\WebServices;

class FontGetIncludedGlyphs
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $fontID
     * @access public
     */
    public $fontID = null;

    /**
     * @param string $apiKey
     * @param string $fontID
     * @access public
     */
    public function __construct($apiKey, $fontID)
    {
      $this->apiKey = $apiKey;
      $this->fontID = $fontID;
    }

}
