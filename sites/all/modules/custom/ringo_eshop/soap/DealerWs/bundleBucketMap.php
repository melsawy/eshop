<?php

class bundleBucketMap
{

    /**
     * @var bucketType $bucketType
     * @access public
     */
    public $bucketType = null;

    /**
     * @var int $bundleBucketMapId
     * @access public
     */
    public $bundleBucketMapId = null;

    /**
     * @var bundleType $bundleType
     * @access public
     */
    public $bundleType = null;

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
     * @var simActivation[] $simActivationList1
     * @access public
     */
    public $simActivationList1 = null;

    /**
     * @var simActivation[] $simActivationList2
     * @access public
     */
    public $simActivationList2 = null;

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

    /**
     * @param bucketType $bucketType
     * @param int $bundleBucketMapId
     * @param bundleType $bundleType
     * @param string $isDeleted
     * @param float $price
     * @param int $quantity
     * @param int $servicePlanId
     * @param int $serviceProviderId
     * @param int $status
     * @access public
     */
    public function __construct($bucketType, $bundleBucketMapId, $bundleType, $isDeleted, $price, $quantity, $servicePlanId, $serviceProviderId, $status)
    {
      $this->bucketType = $bucketType;
      $this->bundleBucketMapId = $bundleBucketMapId;
      $this->bundleType = $bundleType;
      $this->isDeleted = $isDeleted;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->servicePlanId = $servicePlanId;
      $this->serviceProviderId = $serviceProviderId;
      $this->status = $status;
    }

}
