<?php

class getMsisdnStatus
{

    /**
     * @var getMsisdnDetailRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getMsisdnDetailRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
