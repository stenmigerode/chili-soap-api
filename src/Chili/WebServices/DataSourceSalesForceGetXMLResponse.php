<?php

namespace Chili\WebServices;

class DataSourceSalesForceGetXMLResponse
{

    /**
     * @var string $DataSourceSalesForceGetXMLResult
     * @access public
     */
    public $DataSourceSalesForceGetXMLResult = null;

    /**
     * @param string $DataSourceSalesForceGetXMLResult
     * @access public
     */
    public function __construct($DataSourceSalesForceGetXMLResult)
    {
      $this->DataSourceSalesForceGetXMLResult = $DataSourceSalesForceGetXMLResult;
    }

}
