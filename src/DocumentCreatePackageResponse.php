<?php

namespace Chili\WebServices;

class DocumentCreatePackageResponse
{

    /**
     * @var string $DocumentCreatePackageResult
     * @access public
     */
    public $DocumentCreatePackageResult = null;

    /**
     * @param string $DocumentCreatePackageResult
     * @access public
     */
    public function __construct($DocumentCreatePackageResult)
    {
      $this->DocumentCreatePackageResult = $DocumentCreatePackageResult;
    }

}
