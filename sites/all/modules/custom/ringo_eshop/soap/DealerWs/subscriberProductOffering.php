<?php

class subscriberProductOffering
{

    /**
     * @var bundleBucketMap $productOfferingGprs
     * @access public
     */
    public $productOfferingGprs = null;

    /**
     * @var bundleRegionMap $productOfferingInt
     * @access public
     */
    public $productOfferingInt = null;

    /**
     * @var bundleBucketMap $productOfferingSms
     * @access public
     */
    public $productOfferingSms = null;

    /**
     * @var bundleBucketMap $productOfferingVoice
     * @access public
     */
    public $productOfferingVoice = null;

    /**
     * @param bundleBucketMap $productOfferingGprs
     * @param bundleRegionMap $productOfferingInt
     * @param bundleBucketMap $productOfferingSms
     * @param bundleBucketMap $productOfferingVoice
     * @access public
     */
    public function __construct($productOfferingGprs, $productOfferingInt, $productOfferingSms, $productOfferingVoice)
    {
      $this->productOfferingGprs = $productOfferingGprs;
      $this->productOfferingInt = $productOfferingInt;
      $this->productOfferingSms = $productOfferingSms;
      $this->productOfferingVoice = $productOfferingVoice;
    }

}
