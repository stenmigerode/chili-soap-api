<?php

namespace Chili\WebServices;

class DataSourceDownloadURL
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
     * @var string $urlType
     * @access public
     */
    public $urlType = null;

    /**
     * @var string $query
     * @access public
     */
    public $query = null;

    /**
     * @var string $forDocumentID
     * @access public
     */
    public $forDocumentID = null;

    /**
     * @var string $editorQueryString
     * @access public
     */
    public $editorQueryString = null;

    /**
     * @param string $apiKey
     * @param string $dataSourceID
     * @param string $urlType
     * @param string $query
     * @param string $forDocumentID
     * @param string $editorQueryString
     * @access public
     */
    public function __construct($apiKey, $dataSourceID, $urlType, $query, $forDocumentID, $editorQueryString)
    {
      $this->apiKey = $apiKey;
      $this->dataSourceID = $dataSourceID;
      $this->urlType = $urlType;
      $this->query = $query;
      $this->forDocumentID = $forDocumentID;
      $this->editorQueryString = $editorQueryString;
    }

}
