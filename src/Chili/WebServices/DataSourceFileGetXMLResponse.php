<?php

namespace Chili\WebServices;

class DataSourceFileGetXMLResponse
{

    /**
     * @var string $DataSourceFileGetXMLResult
     * @access public
     */
    public $DataSourceFileGetXMLResult = null;

    /**
     * @param string $DataSourceFileGetXMLResult
     * @access public
     */
    public function __construct($DataSourceFileGetXMLResult)
    {
      $this->DataSourceFileGetXMLResult = $DataSourceFileGetXMLResult;
    }

}
