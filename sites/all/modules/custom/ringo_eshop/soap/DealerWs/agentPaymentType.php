<?php

class agentPaymentType
{

    /**
     * @var agentActivity[] $agentActivityList
     * @access public
     */
    public $agentActivityList = null;

    /**
     * @var int $agentPaymentTypeId
     * @access public
     */
    public $agentPaymentTypeId = null;

    /**
     * @var string $isDisplay
     * @access public
     */
    public $isDisplay = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @param int $agentPaymentTypeId
     * @param string $isDisplay
     * @param string $name
     * @access public
     */
    public function __construct($agentPaymentTypeId, $isDisplay, $name)
    {
      $this->agentPaymentTypeId = $agentPaymentTypeId;
      $this->isDisplay = $isDisplay;
      $this->name = $name;
    }

}
