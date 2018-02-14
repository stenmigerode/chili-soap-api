<?php

namespace Chili\WebServices;

class IconSetGetIconsResponse
{

    /**
     * @var string $IconSetGetIconsResult
     * @access public
     */
    public $IconSetGetIconsResult = null;

    /**
     * @param string $IconSetGetIconsResult
     * @access public
     */
    public function __construct($IconSetGetIconsResult)
    {
      $this->IconSetGetIconsResult = $IconSetGetIconsResult;
    }

}
