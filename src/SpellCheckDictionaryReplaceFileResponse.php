<?php

namespace Chili\WebServices;

class SpellCheckDictionaryReplaceFileResponse
{

    /**
     * @var string $SpellCheckDictionaryReplaceFileResult
     * @access public
     */
    public $SpellCheckDictionaryReplaceFileResult = null;

    /**
     * @param string $SpellCheckDictionaryReplaceFileResult
     * @access public
     */
    public function __construct($SpellCheckDictionaryReplaceFileResult)
    {
      $this->SpellCheckDictionaryReplaceFileResult = $SpellCheckDictionaryReplaceFileResult;
    }

}
