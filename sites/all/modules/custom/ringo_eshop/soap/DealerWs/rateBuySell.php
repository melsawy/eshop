<?php

class rateBuySell
{

    /**
     * @var int $calcTypeId
     * @access public
     */
    public $calcTypeId = null;

    /**
     * @var int $currencyId
     * @access public
     */
    public $currencyId = null;

    /**
     * @var float $defaultAmount
     * @access public
     */
    public $defaultAmount = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var dateTime $effectiveDate
     * @access public
     */
    public $effectiveDate = null;

    /**
     * @var dateTime $endDate
     * @access public
     */
    public $endDate = null;

    /**
     * @var int $rateId
     * @access public
     */
    public $rateId = null;

    /**
     * @var string $rateName
     * @access public
     */
    public $rateName = null;

    /**
     * @var int $rateTypeId
     * @access public
     */
    public $rateTypeId = null;

    /**
     * @var int $rounding
     * @access public
     */
    public $rounding = null;

    /**
     * @var serviceProvider $serviceProvider
     * @access public
     */
    public $serviceProvider = null;

    /**
     * @var int $serviceProviderId
     * @access public
     */
    public $serviceProviderId = null;

    /**
     * @var serviceProviderType $serviceProviderType
     * @access public
     */
    public $serviceProviderType = null;

    /**
     * @var int $serviceProviderTypeId
     * @access public
     */
    public $serviceProviderTypeId = null;

    /**
     * @param int $calcTypeId
     * @param int $currencyId
     * @param float $defaultAmount
     * @param string $description
     * @param dateTime $effectiveDate
     * @param dateTime $endDate
     * @param int $rateId
     * @param string $rateName
     * @param int $rateTypeId
     * @param int $rounding
     * @param serviceProvider $serviceProvider
     * @param int $serviceProviderId
     * @param serviceProviderType $serviceProviderType
     * @param int $serviceProviderTypeId
     * @access public
     */
    public function __construct($calcTypeId, $currencyId, $defaultAmount, $description, $effectiveDate, $endDate, $rateId, $rateName, $rateTypeId, $rounding, $serviceProvider, $serviceProviderId, $serviceProviderType, $serviceProviderTypeId)
    {
      $this->calcTypeId = $calcTypeId;
      $this->currencyId = $currencyId;
      $this->defaultAmount = $defaultAmount;
      $this->description = $description;
      $this->effectiveDate = $effectiveDate;
      $this->endDate = $endDate;
      $this->rateId = $rateId;
      $this->rateName = $rateName;
      $this->rateTypeId = $rateTypeId;
      $this->rounding = $rounding;
      $this->serviceProvider = $serviceProvider;
      $this->serviceProviderId = $serviceProviderId;
      $this->serviceProviderType = $serviceProviderType;
      $this->serviceProviderTypeId = $serviceProviderTypeId;
    }

}
