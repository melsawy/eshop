<?php

class rechargeSim
{

    /**
     * @var rechargeRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param rechargeRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
