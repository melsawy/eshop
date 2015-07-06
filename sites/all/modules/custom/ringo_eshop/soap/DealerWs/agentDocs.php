<?php

class agentDocs
{

    /**
     * @var int $agentId
     * @access public
     */
    public $agentId = null;

    /**
     * @var agent[] $agentList
     * @access public
     */
    public $agentList = null;

    /**
     * @var agent[] $agentList1
     * @access public
     */
    public $agentList1 = null;

    /**
     * @var base64Binary $content
     * @access public
     */
    public $content = null;

    /**
     * @var string $contentType
     * @access public
     */
    public $contentType = null;

    /**
     * @var string $deletedFlag
     * @access public
     */
    public $deletedFlag = null;

    /**
     * @var int $docType
     * @access public
     */
    public $docType = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var dateTime $insertionDate
     * @access public
     */
    public $insertionDate = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @param int $agentId
     * @param base64Binary $content
     * @param string $contentType
     * @param string $deletedFlag
     * @param int $docType
     * @param int $id
     * @param dateTime $insertionDate
     * @param string $name
     * @access public
     */
    public function __construct($agentId, $content, $contentType, $deletedFlag, $docType, $id, $insertionDate, $name)
    {
      $this->agentId = $agentId;
      $this->content = $content;
      $this->contentType = $contentType;
      $this->deletedFlag = $deletedFlag;
      $this->docType = $docType;
      $this->id = $id;
      $this->insertionDate = $insertionDate;
      $this->name = $name;
    }

}
