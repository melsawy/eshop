<?php

class responseImpl
{

    /**
     * @var responseResult $responseResult
     * @access public
     */
    public $responseResult = null;

    /**
     * @param responseResult $responseResult
     * @access public
     */
    public function __construct($responseResult)
    {
      $this->responseResult = $responseResult;
    }

}
