<?php

include_once('requestImpl.php');

class assignProductRequest extends requestImpl
{

    /**
     * @var string $phoneNumber
     * @access public
     */
    public $phoneNumber = null;

    /**
     * @var subscriberProductOffering $productOffering
     * @access public
     */
    public $productOffering = null;

    /**
     * @param requestParameter $requestParam
     * @param string $phoneNumber
     * @param subscriberProductOffering $productOffering
     * @access public
     */
    public function __construct($requestParam, $phoneNumber, $productOffering)
    {
      parent::__construct($requestParam);
      $this->phoneNumber = $phoneNumber;
      $this->productOffering = $productOffering;
    }

}
