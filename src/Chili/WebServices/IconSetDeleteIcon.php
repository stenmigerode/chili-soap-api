<?php

namespace Chili\WebServices;

class IconSetDeleteIcon
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
     * @var string $iconName
     * @access public
     */
    public $iconName = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $iconName
     * @access public
     */
    public function __construct($apiKey, $itemID, $iconName)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->iconName = $iconName;
    }

}
