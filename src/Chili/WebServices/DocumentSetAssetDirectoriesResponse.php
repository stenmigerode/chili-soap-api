<?php

namespace Chili\WebServices;

class DocumentSetAssetDirectoriesResponse
{

    /**
     * @var string $DocumentSetAssetDirectoriesResult
     * @access public
     */
    public $DocumentSetAssetDirectoriesResult = null;

    /**
     * @param string $DocumentSetAssetDirectoriesResult
     * @access public
     */
    public function __construct($DocumentSetAssetDirectoriesResult)
    {
      $this->DocumentSetAssetDirectoriesResult = $DocumentSetAssetDirectoriesResult;
    }

}
