<?php

include_once('requestImpl.php');

class getMsisdnDetailRequest extends requestImpl
{

    /**
     * @var string $msisdn
     * @access public
     */
    public $msisdn = null;

    /**
     * @param requestParameter $requestParam
     * @param string $msisdn
     * @access public
     */
    public function __construct($requestParam, $msisdn)
    {
      parent::__construct($requestParam);
      $this->msisdn = $msisdn;
    }

}
