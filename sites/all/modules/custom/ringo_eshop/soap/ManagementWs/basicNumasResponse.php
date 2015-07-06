<?php

class basicNumasResponse
{

    /**
     * @var int $code
     * @access public
     */
    public $code = null;

    /**
     * @var string $message
     * @access public
     */
    public $message = null;

    /**
     * @param int $code
     * @param string $message
     * @access public
     */
    public function __construct($code, $message)
    {
      $this->code = $code;
      $this->message = $message;
    }

}
