<?php

namespace Chili\WebServices;

class IconSetDeleteIconResponse
{

    /**
     * @var string $IconSetDeleteIconResult
     * @access public
     */
    public $IconSetDeleteIconResult = null;

    /**
     * @param string $IconSetDeleteIconResult
     * @access public
     */
    public function __construct($IconSetDeleteIconResult)
    {
      $this->IconSetDeleteIconResult = $IconSetDeleteIconResult;
    }

}
