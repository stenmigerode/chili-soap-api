<?php

namespace Chili\WebServices;

class SetUserLanguageResponse
{

    /**
     * @var string $SetUserLanguageResult
     * @access public
     */
    public $SetUserLanguageResult = null;

    /**
     * @param string $SetUserLanguageResult
     * @access public
     */
    public function __construct($SetUserLanguageResult)
    {
      $this->SetUserLanguageResult = $SetUserLanguageResult;
    }

}
