<?php

namespace Chili\WebServices;

class SpellCheckDictionaryAddResponse
{

    /**
     * @var string $SpellCheckDictionaryAddResult
     * @access public
     */
    public $SpellCheckDictionaryAddResult = null;

    /**
     * @param string $SpellCheckDictionaryAddResult
     * @access public
     */
    public function __construct($SpellCheckDictionaryAddResult)
    {
      $this->SpellCheckDictionaryAddResult = $SpellCheckDictionaryAddResult;
    }

}
