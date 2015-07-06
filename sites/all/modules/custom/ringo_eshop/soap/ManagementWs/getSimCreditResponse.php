<?php

include_once('responseImpl.php');

class getSimCreditResponse extends responseImpl
{

    /**
     * @var float $balance
     * @access public
     */
    public $balance = null;

    /**
     * @param responseResult $responseResult
     * @param float $balance
     * @access public
     */
    public function __construct($responseResult, $balance)
    {
      parent::__construct($responseResult);
      $this->balance = $balance;
    }

}
