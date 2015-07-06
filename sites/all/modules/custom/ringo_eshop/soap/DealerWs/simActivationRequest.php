<?php

include_once('requestImpl.php');

class simActivationRequest extends requestImpl
{

    /**
     * @var subscriberProductOffering $productOffering
     * @access public
     */
    public $productOffering = null;

    /**
     * @var simActivation $simActivation
     * @access public
     */
    public $simActivation = null;

    /**
     * @var subscriberDocument $subDoc1
     * @access public
     */
    public $subDoc1 = null;

    /**
     * @var subscriberDocument $subDoc2
     * @access public
     */
    public $subDoc2 = null;

    /**
     * @var subscriberDocument $subDoc3
     * @access public
     */
    public $subDoc3 = null;

    /**
     * @var subscriberDocument $subDoc4
     * @access public
     */
    public $subDoc4 = null;

    /**
     * @var subscriberDocument $subDoc5
     * @access public
     */
    public $subDoc5 = null;

    /**
     * @param requestParameter $requestParam
     * @param subscriberProductOffering $productOffering
     * @param simActivation $simActivation
     * @param subscriberDocument $subDoc1
     * @param subscriberDocument $subDoc2
     * @param subscriberDocument $subDoc3
     * @param subscriberDocument $subDoc4
     * @param subscriberDocument $subDoc5
     * @access public
     */
    public function __construct($requestParam, $productOffering, $simActivation, $subDoc1, $subDoc2, $subDoc3, $subDoc4, $subDoc5)
    {
      parent::__construct($requestParam);
      $this->productOffering = $productOffering;
      $this->simActivation = $simActivation;
      $this->subDoc1 = $subDoc1;
      $this->subDoc2 = $subDoc2;
      $this->subDoc3 = $subDoc3;
      $this->subDoc4 = $subDoc4;
      $this->subDoc5 = $subDoc5;
    }

}
