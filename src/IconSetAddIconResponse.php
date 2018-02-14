<?php

namespace Chili\WebServices;

class IconSetAddIconResponse
{

    /**
     * @var string $IconSetAddIconResult
     * @access public
     */
    public $IconSetAddIconResult = null;

    /**
     * @param string $IconSetAddIconResult
     * @access public
     */
    public function __construct($IconSetAddIconResult)
    {
      $this->IconSetAddIconResult = $IconSetAddIconResult;
    }

}
