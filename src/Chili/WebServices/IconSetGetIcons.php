<?php

namespace Chili\WebServices;

class IconSetGetIcons
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
     * @var boolean $allIcons
     * @access public
     */
    public $allIcons = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param boolean $allIcons
     * @access public
     */
    public function __construct($apiKey, $itemID, $allIcons)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->allIcons = $allIcons;
    }

}
