<?php

include_once('modelGeneric.php');

class rContainerService extends modelGeneric
{

    /**
     * @param int $code
     * @param string $description
     * @access public
     */
    public function __construct($code, $description)
    {
      parent::__construct($code, $description);
    }

}
