<?php

namespace Chili\WebServices;

class DataSourceListSampleFiles
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $dataSourceID
     * @access public
     */
    public $dataSourceID = null;

    /**
     * @param string $apiKey
     * @param string $dataSourceID
     * @access public
     */
    public function __construct($apiKey, $dataSourceID)
    {
      $this->apiKey = $apiKey;
      $this->dataSourceID = $dataSourceID;
    }

}
