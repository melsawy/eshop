<?php

class fileType
{

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var subscriberDocument[] $subscriberDocumentList
     * @access public
     */
    public $subscriberDocumentList = null;

    /**
     * @param string $description
     * @param int $id
     * @param string $name
     * @access public
     */
    public function __construct($description, $id, $name)
    {
      $this->description = $description;
      $this->id = $id;
      $this->name = $name;
    }

}
