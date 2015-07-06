<?php

class beforeRequest
{

    /**
     * @var int $arg0
     * @access public
     */
    public $arg0 = null;

    /**
     * @var string $arg1
     * @access public
     */
    public $arg1 = null;

    /**
     * @var string $arg2
     * @access public
     */
    public $arg2 = null;

    /**
     * @var string $arg3
     * @access public
     */
    public $arg3 = null;

    /**
     * @var string $arg4
     * @access public
     */
    public $arg4 = null;

    /**
     * @var string $arg5
     * @access public
     */
    public $arg5 = null;

    /**
     * @var string $arg6
     * @access public
     */
    public $arg6 = null;

    /**
     * @param int $arg0
     * @param string $arg1
     * @param string $arg2
     * @param string $arg3
     * @param string $arg4
     * @param string $arg5
     * @param string $arg6
     * @access public
     */
    public function __construct($arg0, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6)
    {
      $this->arg0 = $arg0;
      $this->arg1 = $arg1;
      $this->arg2 = $arg2;
      $this->arg3 = $arg3;
      $this->arg4 = $arg4;
      $this->arg5 = $arg5;
      $this->arg6 = $arg6;
    }

}
