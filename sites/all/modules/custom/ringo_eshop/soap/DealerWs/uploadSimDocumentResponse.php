<?php

class uploadSimDocumentResponse
{

    /**
     * @var uploadDocumentResponse $return
     * @access public
     */
    public $return = null;

    /**
     * @param uploadDocumentResponse $return
     * @access public
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

}
