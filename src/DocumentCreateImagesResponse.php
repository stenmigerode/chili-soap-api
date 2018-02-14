<?php

namespace Chili\WebServices;

class DocumentCreateImagesResponse
{

    /**
     * @var string $DocumentCreateImagesResult
     * @access public
     */
    public $DocumentCreateImagesResult = null;

    /**
     * @param string $DocumentCreateImagesResult
     * @access public
     */
    public function __construct($DocumentCreateImagesResult)
    {
      $this->DocumentCreateImagesResult = $DocumentCreateImagesResult;
    }

}
