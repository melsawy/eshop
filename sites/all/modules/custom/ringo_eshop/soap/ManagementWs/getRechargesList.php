<?php

class getRechargesList
{

    /**
     * @var getTopupListRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param getTopupListRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
