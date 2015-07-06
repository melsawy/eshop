<?php

include_once('requestImpl.php');

class uploadDocumentRequest extends requestImpl
{

    /**
     * @var subscriberDocument $subscriberDoc
     * @access public
     */
    public $subscriberDoc = null;

    /**
     * @param requestParameter $requestParam
     * @param subscriberDocument $subscriberDoc
     * @access public
     */
    public function __construct($requestParam, $subscriberDoc)
    {
      parent::__construct($requestParam);
      $this->subscriberDoc = $subscriberDoc;
    }

}
