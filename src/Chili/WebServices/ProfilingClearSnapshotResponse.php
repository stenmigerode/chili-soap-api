<?php

namespace Chili\WebServices;

class ProfilingClearSnapshotResponse
{

    /**
     * @var string $ProfilingClearSnapshotResult
     * @access public
     */
    public $ProfilingClearSnapshotResult = null;

    /**
     * @param string $ProfilingClearSnapshotResult
     * @access public
     */
    public function __construct($ProfilingClearSnapshotResult)
    {
      $this->ProfilingClearSnapshotResult = $ProfilingClearSnapshotResult;
    }

}
