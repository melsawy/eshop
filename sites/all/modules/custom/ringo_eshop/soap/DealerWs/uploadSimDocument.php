<?php

class uploadSimDocument
{

    /**
     * @var uploadDocumentRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param uploadDocumentRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
