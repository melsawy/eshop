<?php

include_once('modelGeneric.php');

class rContainerPromoBags extends modelGeneric
{

    /**
     * @var string $billingProfile
     * @access public
     */
    public $billingProfile = null;

    /**
     * @var string $credit
     * @access public
     */
    public $credit = null;

    /**
     * @var string $hasAnyMovements
     * @access public
     */
    public $hasAnyMovements = null;

    /**
     * @var string $lastCreditUpdate
     * @access public
     */
    public $lastCreditUpdate = null;

    /**
     * @var string $pricePlanName
     * @access public
     */
    public $pricePlanName = null;

    /**
     * @var string $typeOfLine
     * @access public
     */
    public $typeOfLine = null;

    /**
     * @var string $visualPricePlan
     * @access public
     */
    public $visualPricePlan = null;

    /**
     * @param int $code
     * @param string $description
     * @param string $billingProfile
     * @param string $credit
     * @param string $hasAnyMovements
     * @param string $lastCreditUpdate
     * @param string $pricePlanName
     * @param string $typeOfLine
     * @param string $visualPricePlan
     * @access public
     */
    public function __construct($code, $description, $billingProfile, $credit, $hasAnyMovements, $lastCreditUpdate, $pricePlanName, $typeOfLine, $visualPricePlan)
    {
      parent::__construct($code, $description);
      $this->billingProfile = $billingProfile;
      $this->credit = $credit;
      $this->hasAnyMovements = $hasAnyMovements;
      $this->lastCreditUpdate = $lastCreditUpdate;
      $this->pricePlanName = $pricePlanName;
      $this->typeOfLine = $typeOfLine;
      $this->visualPricePlan = $visualPricePlan;
    }

}
