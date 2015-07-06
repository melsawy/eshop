<?php

include_once('responseImpl.php');

class getToupListResponse extends responseImpl
{

    /**
     * @var rContainerRecharges $rContainerRecharges
     * @access public
     */
    public $rContainerRecharges = null;

    /**
     * @param responseResult $responseResult
     * @param rContainerRecharges $rContainerRecharges
     * @access public
     */
    public function __construct($responseResult, $rContainerRecharges)
    {
      parent::__construct($responseResult);
      $this->rContainerRecharges = $rContainerRecharges;
    }

}
