<?php

class rContainerMdw
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
     * @var inputField[] $fields
     * @access public
     */
    public $fields = null;

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
