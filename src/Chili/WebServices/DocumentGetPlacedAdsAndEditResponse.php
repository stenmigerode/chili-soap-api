<?php

namespace Chili\WebServices;

class DocumentGetPlacedAdsAndEditResponse
{

    /**
     * @var string $DocumentGetPlacedAdsAndEditResult
     * @access public
     */
    public $DocumentGetPlacedAdsAndEditResult = null;

    /**
     * @param string $DocumentGetPlacedAdsAndEditResult
     * @access public
     */
    public function __construct($DocumentGetPlacedAdsAndEditResult)
    {
      $this->DocumentGetPlacedAdsAndEditResult = $DocumentGetPlacedAdsAndEditResult;
    }

}
