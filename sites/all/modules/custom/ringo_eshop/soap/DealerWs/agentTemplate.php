<?php

class agentTemplate
{

    /**
     * @var agent[] $agentList
     * @access public
     */
    public $agentList = null;

    /**
     * @var int $agentTemplateId
     * @access public
     */
    public $agentTemplateId = null;

    /**
     * @var int $balanceTypeId
     * @access public
     */
    public $balanceTypeId = null;

    /**
     * @var int $consumptionTypeId
     * @access public
     */
    public $consumptionTypeId = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var serviceProvider $serviceProviderId
     * @access public
     */
    public $serviceProviderId = null;

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

    /**
     * @param int $agentTemplateId
     * @param int $balanceTypeId
     * @param int $consumptionTypeId
     * @param string $description
     * @param string $name
     * @param serviceProvider $serviceProviderId
     * @param int $status
     * @access public
     */
    public function __construct($agentTemplateId, $balanceTypeId, $consumptionTypeId, $description, $name, $serviceProviderId, $status)
    {
      $this->agentTemplateId = $agentTemplateId;
      $this->balanceTypeId = $balanceTypeId;
      $this->consumptionTypeId = $consumptionTypeId;
      $this->description = $description;
      $this->name = $name;
      $this->serviceProviderId = $serviceProviderId;
      $this->status = $status;
    }

}
