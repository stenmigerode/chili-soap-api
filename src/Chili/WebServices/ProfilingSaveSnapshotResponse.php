<?php

namespace Chili\WebServices;

class ProfilingSaveSnapshotResponse
{

    /**
     * @var string $ProfilingSaveSnapshotResult
     * @access public
     */
    public $ProfilingSaveSnapshotResult = null;

    /**
     * @param string $ProfilingSaveSnapshotResult
     * @access public
     */
    public function __construct($ProfilingSaveSnapshotResult)
    {
      $this->ProfilingSaveSnapshotResult = $ProfilingSaveSnapshotResult;
    }

}
