<?php

namespace Chili\WebServices;

class MobileFeedGetDocumentListResponse
{

    /**
     * @var string $MobileFeedGetDocumentListResult
     * @access public
     */
    public $MobileFeedGetDocumentListResult = null;

    /**
     * @param string $MobileFeedGetDocumentListResult
     * @access public
     */
    public function __construct($MobileFeedGetDocumentListResult)
    {
      $this->MobileFeedGetDocumentListResult = $MobileFeedGetDocumentListResult;
    }

}
