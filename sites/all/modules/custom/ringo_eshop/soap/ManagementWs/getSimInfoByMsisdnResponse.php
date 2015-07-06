<?php

include_once('responseImpl.php');

class getSimInfoByMsisdnResponse extends responseImpl
{

    /**
     * @var rContainer $rContainer
     * @access public
     */
    public $rContainer = null;

    /**
     * @param responseResult $responseResult
     * @param rContainer $rContainer
     * @access public
     */
    public function __construct($responseResult, $rContainer)
    {
      parent::__construct($responseResult);
      $this->rContainer = $rContainer;
    }

}
