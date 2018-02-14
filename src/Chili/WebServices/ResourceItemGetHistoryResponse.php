<?php

namespace Chili\WebServices;

class ResourceItemGetHistoryResponse
{

    /**
     * @var string $ResourceItemGetHistoryResult
     * @access public
     */
    public $ResourceItemGetHistoryResult = null;

    /**
     * @param string $ResourceItemGetHistoryResult
     * @access public
     */
    public function __construct($ResourceItemGetHistoryResult)
    {
      $this->ResourceItemGetHistoryResult = $ResourceItemGetHistoryResult;
    }

}
