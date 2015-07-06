<?php

include_once('requestImpl.php');

class getAllSimByTaxCodeRequest extends requestImpl
{

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

    /**
     * @var string $taxcode
     * @access public
     */
    public $taxcode = null;

    /**
     * @param requestParameter $requestParam
     * @param int $status
     * @param string $taxcode
     * @access public
     */
    public function __construct($requestParam, $status, $taxcode)
    {
      parent::__construct($requestParam);
      $this->status = $status;
      $this->taxcode = $taxcode;
    }

}
