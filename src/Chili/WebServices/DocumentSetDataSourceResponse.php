<?php

namespace Chili\WebServices;

class DocumentSetDataSourceResponse
{

    /**
     * @var string $DocumentSetDataSourceResult
     * @access public
     */
    public $DocumentSetDataSourceResult = null;

    /**
     * @param string $DocumentSetDataSourceResult
     * @access public
     */
    public function __construct($DocumentSetDataSourceResult)
    {
      $this->DocumentSetDataSourceResult = $DocumentSetDataSourceResult;
    }

}
