<?php

namespace Chili\WebServices;

class SpellCheckDictionaryAdd
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
     * @var string $dicFileOrData
     * @access public
     */
    public $dicFileOrData = null;

    /**
     * @var string $affFileOrData
     * @access public
     */
    public $affFileOrData = null;

    /**
     * @param string $apiKey
     * @param string $name
     * @param string $dicFileOrData
     * @param string $affFileOrData
     * @access public
     */
    public function __construct($apiKey, $name, $dicFileOrData, $affFileOrData)
    {
      $this->apiKey = $apiKey;
      $this->name = $name;
      $this->dicFileOrData = $dicFileOrData;
      $this->affFileOrData = $affFileOrData;
    }

}
