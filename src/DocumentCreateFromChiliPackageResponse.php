<?php

namespace Chili\WebServices;

class DocumentCreateFromChiliPackageResponse
{

    /**
     * @var string $DocumentCreateFromChiliPackageResult
     * @access public
     */
    public $DocumentCreateFromChiliPackageResult = null;

    /**
     * @param string $DocumentCreateFromChiliPackageResult
     * @access public
     */
    public function __construct($DocumentCreateFromChiliPackageResult)
    {
      $this->DocumentCreateFromChiliPackageResult = $DocumentCreateFromChiliPackageResult;
    }

}
