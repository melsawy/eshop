<?php

include_once('responseImpl.php');

class dealerLoginRsp extends responseImpl
{

    /**
     * @var agent $agent
     * @access public
     */
    public $agent = null;

    /**
     * @var agentSummary $agentSummary
     * @access public
     */
    public $agentSummary = null;

    /**
     * @var serviceProvider $serviceProvider
     * @access public
     */
    public $serviceProvider = null;

    /**
     * @var simRechargeOption[] $simRechargeList
     * @access public
     */
    public $simRechargeList = null;

    /**
     * @param responseResult $responseResult
     * @param agent $agent
     * @param agentSummary $agentSummary
     * @param serviceProvider $serviceProvider
     * @access public
     */
    public function __construct($responseResult, $agent, $agentSummary, $serviceProvider)
    {
      parent::__construct($responseResult);
      $this->agent = $agent;
      $this->agentSummary = $agentSummary;
      $this->serviceProvider = $serviceProvider;
    }

}
