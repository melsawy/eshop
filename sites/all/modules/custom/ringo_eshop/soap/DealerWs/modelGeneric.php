<?php

class modelGeneric
{

    /**
     * @var int $code
     * @access public
     */
    public $code = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @param int $code
     * @param string $description
     * @access public
     */
    public function __construct($code, $description)
    {
      $this->code = $code;
      $this->description = $description;
    }

}
