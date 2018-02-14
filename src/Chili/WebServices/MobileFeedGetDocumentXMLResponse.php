<?php

namespace Chili\WebServices;

class MobileFeedGetDocumentXMLResponse
{

    /**
     * @var string $MobileFeedGetDocumentXMLResult
     * @access public
     */
    public $MobileFeedGetDocumentXMLResult = null;

    /**
     * @param string $MobileFeedGetDocumentXMLResult
     * @access public
     */
    public function __construct($MobileFeedGetDocumentXMLResult)
    {
      $this->MobileFeedGetDocumentXMLResult = $MobileFeedGetDocumentXMLResult;
    }

}
