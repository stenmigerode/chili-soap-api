<?php

namespace Chili\WebServices;

class FoldingSettingCreatePackageResponse
{

    /**
     * @var string $FoldingSettingCreatePackageResult
     * @access public
     */
    public $FoldingSettingCreatePackageResult = null;

    /**
     * @param string $FoldingSettingCreatePackageResult
     * @access public
     */
    public function __construct($FoldingSettingCreatePackageResult)
    {
      $this->FoldingSettingCreatePackageResult = $FoldingSettingCreatePackageResult;
    }

}
