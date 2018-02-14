<?php

namespace Chili\WebServices;

class FontGetIncludedGlyphsResponse
{

    /**
     * @var string $FontGetIncludedGlyphsResult
     * @access public
     */
    public $FontGetIncludedGlyphsResult = null;

    /**
     * @param string $FontGetIncludedGlyphsResult
     * @access public
     */
    public function __construct($FontGetIncludedGlyphsResult)
    {
      $this->FontGetIncludedGlyphsResult = $FontGetIncludedGlyphsResult;
    }

}
