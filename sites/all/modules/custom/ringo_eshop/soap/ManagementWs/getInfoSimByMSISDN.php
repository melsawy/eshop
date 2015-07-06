<?php

class getInfoSimByMSISDN
{

    /**
     * @var getSimInfoByMsisdnRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getSimInfoByMsisdnRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
