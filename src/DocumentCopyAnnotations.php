<?php

namespace Chili\WebServices;

class DocumentCopyAnnotations
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $fromItemID
     * @access public
     */
    public $fromItemID = null;

    /**
     * @var string $toItemID
     * @access public
     */
    public $toItemID = null;

    /**
     * @var boolean $replaceExistingAnnotations
     * @access public
     */
    public $replaceExistingAnnotations = null;

    /**
     * @param string $apiKey
     * @param string $fromItemID
     * @param string $toItemID
     * @param boolean $replaceExistingAnnotations
     * @access public
     */
    public function __construct($apiKey, $fromItemID, $toItemID, $replaceExistingAnnotations)
    {
      $this->apiKey = $apiKey;
      $this->fromItemID = $fromItemID;
      $this->toItemID = $toItemID;
      $this->replaceExistingAnnotations = $replaceExistingAnnotations;
    }

}
