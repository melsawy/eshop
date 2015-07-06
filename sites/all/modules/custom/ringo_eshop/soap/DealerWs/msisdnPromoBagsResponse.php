<?php

include_once('responseImpl.php');

class msisdnPromoBagsResponse extends responseImpl
{

    /**
     * @var rContainerPromoBags $promoBags
     * @access public
     */
    public $promoBags = null;

    /**
     * @var subscriptionService[] $simPromotions
     * @access public
     */
    public $simPromotions = null;

    /**
     * @param responseResult $responseResult
     * @param rContainerPromoBags $promoBags
     * @access public
     */
    public function __construct($responseResult, $promoBags)
    {
      parent::__construct($responseResult);
      $this->promoBags = $promoBags;
    }

}
