<?php

namespace Chili\WebServices;

class SpellCheckDictionariesGetSystemListResponse
{

    /**
     * @var string $SpellCheckDictionariesGetSystemListResult
     * @access public
     */
    public $SpellCheckDictionariesGetSystemListResult = null;

    /**
     * @param string $SpellCheckDictionariesGetSystemListResult
     * @access public
     */
    public function __construct($SpellCheckDictionariesGetSystemListResult)
    {
      $this->SpellCheckDictionariesGetSystemListResult = $SpellCheckDictionariesGetSystemListResult;
    }

}
