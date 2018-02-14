<?php

namespace Chili\WebServices;

class ServerDeleteAllSaveSystemFileInfosResponse
{

    /**
     * @var string $ServerDeleteAllSaveSystemFileInfosResult
     * @access public
     */
    public $ServerDeleteAllSaveSystemFileInfosResult = null;

    /**
     * @param string $ServerDeleteAllSaveSystemFileInfosResult
     * @access public
     */
    public function __construct($ServerDeleteAllSaveSystemFileInfosResult)
    {
      $this->ServerDeleteAllSaveSystemFileInfosResult = $ServerDeleteAllSaveSystemFileInfosResult;
    }

}
