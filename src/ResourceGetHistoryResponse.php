<?php

namespace Chili\WebServices;

class ResourceGetHistoryResponse
{

    /**
     * @var string $ResourceGetHistoryResult
     * @access public
     */
    public $ResourceGetHistoryResult = null;

    /**
     * @param string $ResourceGetHistoryResult
     * @access public
     */
    public function __construct($ResourceGetHistoryResult)
    {
      $this->ResourceGetHistoryResult = $ResourceGetHistoryResult;
    }

}
