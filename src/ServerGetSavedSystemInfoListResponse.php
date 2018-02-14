<?php

namespace Chili\WebServices;

class ServerGetSavedSystemInfoListResponse
{

    /**
     * @var string $ServerGetSavedSystemInfoListResult
     * @access public
     */
    public $ServerGetSavedSystemInfoListResult = null;

    /**
     * @param string $ServerGetSavedSystemInfoListResult
     * @access public
     */
    public function __construct($ServerGetSavedSystemInfoListResult)
    {
      $this->ServerGetSavedSystemInfoListResult = $ServerGetSavedSystemInfoListResult;
    }

}
