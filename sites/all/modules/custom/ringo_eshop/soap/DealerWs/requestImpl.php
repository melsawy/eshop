<?php

class requestImpl
{

    /**
     * @var requestParameter $requestParam
     * @access public
     */
    public $requestParam = null;

    /**
     * @param requestParameter $requestParam
     * @access public
     */
    public function __construct($requestParam)
    {
      $this->requestParam = $requestParam;
    }

}
