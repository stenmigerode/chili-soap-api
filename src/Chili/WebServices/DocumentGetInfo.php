<?php

namespace Chili\WebServices;

class DocumentGetInfo
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $itemID
     * @access public
     */
    public $itemID = null;

    /**
     * @var boolean $extended
     * @access public
     */
    public $extended = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param boolean $extended
     * @access public
     */
    public function __construct($apiKey, $itemID, $extended)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->extended = $extended;
    }

}
