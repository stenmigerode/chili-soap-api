<?php

namespace Chili\WebServices;

class SetAssetDirectoriesResponse
{

    /**
     * @var string $SetAssetDirectoriesResult
     * @access public
     */
    public $SetAssetDirectoriesResult = null;

    /**
     * @param string $SetAssetDirectoriesResult
     * @access public
     */
    public function __construct($SetAssetDirectoriesResult)
    {
      $this->SetAssetDirectoriesResult = $SetAssetDirectoriesResult;
    }

}
