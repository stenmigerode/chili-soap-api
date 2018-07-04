<?php

namespace Chili\WebServices;

class ResourceSearchPagedWithSortingResponse
{

    /**
     * @var string $ResourceSearchPagedWithSortingResult
     * @access public
     */
    public $ResourceSearchPagedWithSortingResult = null;

    /**
     * @param string $ResourceSearchPagedWithSortingResult
     * @access public
     */
    public function __construct($ResourceSearchPagedWithSortingResult)
    {
      $this->ResourceSearchPagedWithSortingResult = $ResourceSearchPagedWithSortingResult;
    }

}
