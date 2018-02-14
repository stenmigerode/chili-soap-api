<?php

namespace Chili\WebServices;

class SetNextResourceItemIDResponse
{

    /**
     * @var string $SetNextResourceItemIDResult
     * @access public
     */
    public $SetNextResourceItemIDResult = null;

    /**
     * @param string $SetNextResourceItemIDResult
     * @access public
     */
    public function __construct($SetNextResourceItemIDResult)
    {
      $this->SetNextResourceItemIDResult = $SetNextResourceItemIDResult;
    }

}
