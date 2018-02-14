<?php

namespace Chili\WebServices;

class ResourceItemMoveResponse
{

    /**
     * @var string $ResourceItemMoveResult
     * @access public
     */
    public $ResourceItemMoveResult = null;

    /**
     * @param string $ResourceItemMoveResult
     * @access public
     */
    public function __construct($ResourceItemMoveResult)
    {
      $this->ResourceItemMoveResult = $ResourceItemMoveResult;
    }

}
