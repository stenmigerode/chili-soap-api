<?php

namespace Chili\WebServices;

class ThreeDModelCreatePackageResponse
{

    /**
     * @var string $ThreeDModelCreatePackageResult
     * @access public
     */
    public $ThreeDModelCreatePackageResult = null;

    /**
     * @param string $ThreeDModelCreatePackageResult
     * @access public
     */
    public function __construct($ThreeDModelCreatePackageResult)
    {
      $this->ThreeDModelCreatePackageResult = $ThreeDModelCreatePackageResult;
    }

}
