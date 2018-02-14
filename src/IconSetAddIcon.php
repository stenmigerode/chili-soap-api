<?php

namespace Chili\WebServices;

class IconSetAddIcon
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
     * @var string $pathOrData
     * @access public
     */
    public $pathOrData = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $iconName
     * @param string $pathOrData
     * @access public
     */
    public function __construct($apiKey, $itemID, $iconName, $pathOrData)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->iconName = $iconName;
      $this->pathOrData = $pathOrData;
    }

}
