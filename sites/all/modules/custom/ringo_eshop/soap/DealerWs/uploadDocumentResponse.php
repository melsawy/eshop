<?php

include_once('responseImpl.php');

class uploadDocumentResponse extends responseImpl
{

    /**
     * @var subscriberDocument $subscriberDocument
     * @access public
     */
    public $subscriberDocument = null;

    /**
     * @param responseResult $responseResult
     * @param subscriberDocument $subscriberDocument
     * @access public
     */
    public function __construct($responseResult, $subscriberDocument)
    {
      parent::__construct($responseResult);
      $this->subscriberDocument = $subscriberDocument;
    }

}
