<?php

include_once('responseImpl.php');

class assignProductResponse extends responseImpl
{

    /**
     * @param responseResult $responseResult
     * @access public
     */
    public function __construct($responseResult)
    {
      parent::__construct($responseResult);
    }

}
