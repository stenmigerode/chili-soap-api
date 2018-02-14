<?php

namespace Chili\WebServices;

class SpellCheckDictionaryAddFromSystemResponse
{

    /**
     * @var string $SpellCheckDictionaryAddFromSystemResult
     * @access public
     */
    public $SpellCheckDictionaryAddFromSystemResult = null;

    /**
     * @param string $SpellCheckDictionaryAddFromSystemResult
     * @access public
     */
    public function __construct($SpellCheckDictionaryAddFromSystemResult)
    {
      $this->SpellCheckDictionaryAddFromSystemResult = $SpellCheckDictionaryAddFromSystemResult;
    }

}
