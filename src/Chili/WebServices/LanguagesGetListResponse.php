<?php

namespace Chili\WebServices;

class LanguagesGetListResponse
{

    /**
     * @var string $LanguagesGetListResult
     * @access public
     */
    public $LanguagesGetListResult = null;

    /**
     * @param string $LanguagesGetListResult
     * @access public
     */
    public function __construct($LanguagesGetListResult)
    {
      $this->LanguagesGetListResult = $LanguagesGetListResult;
    }

}
