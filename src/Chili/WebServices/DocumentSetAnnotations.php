<?php

namespace Chili\WebServices;

class DocumentSetAnnotations
{

    /**
     * @var string $apiKey
     * @access public
     */
    public $apiKey = null;

    /**
     * @var string $itemID
     * @access public
     */
    public $itemID = null;

    /**
     * @var string $annotationXML
     * @access public
     */
    public $annotationXML = null;

    /**
     * @var boolean $replaceExistingAnnotations
     * @access public
     */
    public $replaceExistingAnnotations = null;

    /**
     * @param string $apiKey
     * @param string $itemID
     * @param string $annotationXML
     * @param boolean $replaceExistingAnnotations
     * @access public
     */
    public function __construct($apiKey, $itemID, $annotationXML, $replaceExistingAnnotations)
    {
      $this->apiKey = $apiKey;
      $this->itemID = $itemID;
      $this->annotationXML = $annotationXML;
      $this->replaceExistingAnnotations = $replaceExistingAnnotations;
    }

}
