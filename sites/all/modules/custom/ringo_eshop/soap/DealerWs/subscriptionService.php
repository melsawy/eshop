<?php

class subscriptionService
{

    /**
     * @var string $endDate
     * @access public
     */
    public $endDate = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var int $productId
     * @access public
     */
    public $productId = null;

    /**
     * @var string $promoInstanceName
     * @access public
     */
    public $promoInstanceName = null;

    /**
     * @var string $promoName
     * @access public
     */
    public $promoName = null;

    /**
     * @var int $promotionInstanceId
     * @access public
     */
    public $promotionInstanceId = null;

    /**
     * @var int $serviceId
     * @access public
     */
    public $serviceId = null;

    /**
     * @var string $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @var int $subTypeId
     * @access public
     */
    public $subTypeId = null;

    /**
     * @var int $subscriptionStatus
     * @access public
     */
    public $subscriptionStatus = null;

    /**
     * @var int $subserviceId
     * @access public
     */
    public $subserviceId = null;

    /**
     * @var string $type
     * @access public
     */
    public $type = null;

    /**
     * @param string $endDate
     * @param string $name
     * @param int $productId
     * @param string $promoInstanceName
     * @param string $promoName
     * @param int $promotionInstanceId
     * @param int $serviceId
     * @param string $startDate
     * @param int $subTypeId
     * @param int $subscriptionStatus
     * @param int $subserviceId
     * @param string $type
     * @access public
     */
    public function __construct($endDate, $name, $productId, $promoInstanceName, $promoName, $promotionInstanceId, $serviceId, $startDate, $subTypeId, $subscriptionStatus, $subserviceId, $type)
    {
      $this->endDate = $endDate;
      $this->name = $name;
      $this->productId = $productId;
      $this->promoInstanceName = $promoInstanceName;
      $this->promoName = $promoName;
      $this->promotionInstanceId = $promotionInstanceId;
      $this->serviceId = $serviceId;
      $this->startDate = $startDate;
      $this->subTypeId = $subTypeId;
      $this->subscriptionStatus = $subscriptionStatus;
      $this->subserviceId = $subserviceId;
      $this->type = $type;
    }

}
