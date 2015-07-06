<?php

include_once('responseImpl.php');

class rechargeResponse extends responseImpl
{

    /**
     * @var agent $agent
     * @access public
     */
    public $agent = null;

    /**
     * @param responseResult $responseResult
     * @param agent $agent
     * @access public
     */
    public function __construct($responseResult, $agent)
    {
      parent::__construct($responseResult);
      $this->agent = $agent;
    }

}
