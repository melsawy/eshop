<?php

class bundleRegionMap
{

    /**
     * @var float $activationFee
     * @access public
     */
    public $activationFee = null;

    /**
     * @var int $bundleCountryMapId
     * @access public
     */
    public $bundleCountryMapId = null;

    /**
     * @var bundleType $bundleType
     * @access public
     */
    public $bundleType = null;

    /**
     * @var int $bundleTypeId
     * @access public
     */
    public $bundleTypeId = null;

    /**
     * @var string $isDeleted
     * @access public
     */
    public $isDeleted = null;

    /**
     * @var float $price
     * @access public
     */
    public $price = null;

    /**
     * @var int $quantity
     * @access public
     */
    public $quantity = null;

    /**
     * @var float $ratePerMin
     * @access public
     */
    public $ratePerMin = null;

    /**
     * @var region $region
     * @access public
     */
    public $region = null;

    /**
     * @var int $regionId
     * @access public
     */
    public $regionId = null;

    /**
     * @var int $servicePlanId
     * @access public
     */
    public $servicePlanId = null;

    /**
     * @var int $serviceProviderId
     * @access public
     */
    public $serviceProviderId = null;

    /**
     * @var simActivation[] $simActivationList
     * @access public
     */
    public $simActivationList = null;

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

    /**
     * @param float $activationFee
     * @param int $bundleCountryMapId
     * @param bundleType $bundleType
     * @param int $bundleTypeId
     * @param string $isDeleted
     * @param float $price
     * @param int $quantity
     * @param float $ratePerMin
     * @param region $region
     * @param int $regionId
     * @param int $servicePlanId
     * @param int $serviceProviderId
     * @param int $status
     * @access public
     */
    public function __construct($activationFee, $bundleCountryMapId, $bundleType, $bundleTypeId, $isDeleted, $price, $quantity, $ratePerMin, $region, $regionId, $servicePlanId, $serviceProviderId, $status)
    {
      $this->activationFee = $activationFee;
      $this->bundleCountryMapId = $bundleCountryMapId;
      $this->bundleType = $bundleType;
      $this->bundleTypeId = $bundleTypeId;
      $this->isDeleted = $isDeleted;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->ratePerMin = $ratePerMin;
      $this->region = $region;
      $this->regionId = $regionId;
      $this->servicePlanId = $servicePlanId;
      $this->serviceProviderId = $serviceProviderId;
      $this->status = $status;
    }

}
