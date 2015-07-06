<?php

include_once('responseImpl.php');

class getProductOfferingResponse extends responseImpl
{

    /**
     * @var bundleRegionMap[] $productOfferingInt
     * @access public
     */
    public $productOfferingInt = null;

    /**
     * @var bundleBucketMap[] $productOfferingNat
     * @access public
     */
    public $productOfferingNat = null;

    /**
     * @param responseResult $responseResult
     * @access public
     */
    public function __construct($responseResult)
    {
      parent::__construct($responseResult);
    }

}
