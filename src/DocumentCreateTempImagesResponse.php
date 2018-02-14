<?php

namespace Chili\WebServices;

class DocumentCreateTempImagesResponse
{

    /**
     * @var string $DocumentCreateTempImagesResult
     * @access public
     */
    public $DocumentCreateTempImagesResult = null;

    /**
     * @param string $DocumentCreateTempImagesResult
     * @access public
     */
    public function __construct($DocumentCreateTempImagesResult)
    {
      $this->DocumentCreateTempImagesResult = $DocumentCreateTempImagesResult;
    }

}
