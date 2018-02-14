<?php

namespace Chili\WebServices;

class DocumentCreateImagesAndPDFResponse
{

    /**
     * @var string $DocumentCreateImagesAndPDFResult
     * @access public
     */
    public $DocumentCreateImagesAndPDFResult = null;

    /**
     * @param string $DocumentCreateImagesAndPDFResult
     * @access public
     */
    public function __construct($DocumentCreateImagesAndPDFResult)
    {
      $this->DocumentCreateImagesAndPDFResult = $DocumentCreateImagesAndPDFResult;
    }

}
