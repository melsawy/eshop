<?php

include_once('requestImpl.php');

class getProductOfferingRequest extends requestImpl
{

    /**
     * @var int $bucketTypeId
     * @access public
     */
    public $bucketTypeId = null;

    /**
     * @var int $bundleTypeId
     * @access public
     */
    public $bundleTypeId = null;

    /**
     * @var int $regionId
     * @access public
     */
    public $regionId = null;

    /**
     * @param requestParameter $requestParam
     * @param int $bucketTypeId
     * @param int $bundleTypeId
     * @param int $regionId
     * @access public
     */
    public function __construct($requestParam, $bucketTypeId, $bundleTypeId, $regionId)
    {
      parent::__construct($requestParam);
      $this->bucketTypeId = $bucketTypeId;
      $this->bundleTypeId = $bundleTypeId;
      $this->regionId = $regionId;
    }

}
