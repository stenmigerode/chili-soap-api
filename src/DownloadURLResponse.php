<?php

namespace Chili\WebServices;

class DownloadURLResponse
{

    /**
     * @var string $DownloadURLResult
     * @access public
     */
    public $DownloadURLResult = null;

    /**
     * @param string $DownloadURLResult
     * @access public
     */
    public function __construct($DownloadURLResult)
    {
      $this->DownloadURLResult = $DownloadURLResult;
    }

}
