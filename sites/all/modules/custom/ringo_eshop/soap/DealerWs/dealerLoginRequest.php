<?php

include_once('requestImpl.php');

class dealerLoginRequest extends requestImpl
{

    /**
     * @var string $userName
     * @access public
     */
    public $userName = null;

    /**
     * @var string $userPassword
     * @access public
     */
    public $userPassword = null;

    /**
     * @param requestParameter $requestParam
     * @param string $userName
     * @param string $userPassword
     * @access public
     */
    public function __construct($requestParam, $userName, $userPassword)
    {
      parent::__construct($requestParam);
      $this->userName = $userName;
      $this->userPassword = $userPassword;
    }

}
