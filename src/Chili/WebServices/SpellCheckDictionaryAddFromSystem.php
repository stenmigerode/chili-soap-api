<?php

namespace Chili\WebServices;

class SpellCheckDictionaryAddFromSystem
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $systemDictName
     * @access public
     */
    public $systemDictName = null;

    /**
     * @param string $apiKey
     * @param string $name
     * @param string $systemDictName
     * @access public
     */
    public function __construct($apiKey, $name, $systemDictName)
    {
      $this->apiKey = $apiKey;
      $this->name = $name;
      $this->systemDictName = $systemDictName;
    }

}
