<?php

namespace Chili\WebServices;

class SwitchServerFlowSubmitFileToFolderResponse
{

    /**
     * @var string $SwitchServerFlowSubmitFileToFolderResult
     * @access public
     */
    public $SwitchServerFlowSubmitFileToFolderResult = null;

    /**
     * @param string $SwitchServerFlowSubmitFileToFolderResult
     * @access public
     */
    public function __construct($SwitchServerFlowSubmitFileToFolderResult)
    {
      $this->SwitchServerFlowSubmitFileToFolderResult = $SwitchServerFlowSubmitFileToFolderResult;
    }

}
