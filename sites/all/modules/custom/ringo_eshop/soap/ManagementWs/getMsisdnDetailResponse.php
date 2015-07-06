<?php

include_once('responseImpl.php');

class getMsisdnDetailResponse extends responseImpl
{

    /**
     * @var msisdnStatusResponse $msisdnStatusResponse
     * @access public
     */
    public $msisdnStatusResponse = null;

    /**
     * @param responseResult $responseResult
     * @param msisdnStatusResponse $msisdnStatusResponse
     * @access public
     */
    public function __construct($responseResult, $msisdnStatusResponse)
    {
      parent::__construct($responseResult);
      $this->msisdnStatusResponse = $msisdnStatusResponse;
    }

}
