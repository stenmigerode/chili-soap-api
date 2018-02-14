<?php

namespace Chili\WebServices;

class DocumentCreateTempPackageResponse
{

    /**
     * @var string $DocumentCreateTempPackageResult
     * @access public
     */
    public $DocumentCreateTempPackageResult = null;

    /**
     * @param string $DocumentCreateTempPackageResult
     * @access public
     */
    public function __construct($DocumentCreateTempPackageResult)
    {
      $this->DocumentCreateTempPackageResult = $DocumentCreateTempPackageResult;
    }

}
