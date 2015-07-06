<?php

class agentLogin
{

    /**
     * @var dealerLoginRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param dealerLoginRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
