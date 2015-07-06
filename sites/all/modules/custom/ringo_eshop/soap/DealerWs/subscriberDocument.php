<?php

class subscriberDocument
{

    /**
     * @var base64Binary $content
     * @access public
     */
    public $content = null;

    /**
     * @var string $deletedFlag
     * @access public
     */
    public $deletedFlag = null;

    /**
     * @var fileType $fileType
     * @access public
     */
    public $fileType = null;

    /**
     * @var int $fileTypeId
     * @access public
     */
    public $fileTypeId = null;

    /**
     * @var string $iccdid
     * @access public
     */
    public $iccdid = null;

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
     * @var string $mimeType
     * @access public
     */
    public $mimeType = null;

    /**
     * @var string $msisdn
     * @access public
     */
    public $msisdn = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var simActivation[] $simActivationList
     * @access public
     */
    public $simActivationList = null;

    /**
     * @var simActivation[] $simActivationList1
     * @access public
     */
    public $simActivationList1 = null;

    /**
     * @var simActivation[] $simActivationList2
     * @access public
     */
    public $simActivationList2 = null;

    /**
     * @var simActivation[] $simActivationList3
     * @access public
     */
    public $simActivationList3 = null;

    /**
     * @var simActivation[] $simActivationList4
     * @access public
     */
    public $simActivationList4 = null;

    /**
     * @var string $status
     * @access public
     */
    public $status = null;

    /**
     * @param base64Binary $content
     * @param string $deletedFlag
     * @param fileType $fileType
     * @param int $fileTypeId
     * @param string $iccdid
     * @param int $id
     * @param dateTime $insertionDate
     * @param string $mimeType
     * @param string $msisdn
     * @param string $name
     * @param string $status
     * @access public
     */
    public function __construct($content, $deletedFlag, $fileType, $fileTypeId, $iccdid, $id, $insertionDate, $mimeType, $msisdn, $name, $status)
    {
      $this->content = $content;
      $this->deletedFlag = $deletedFlag;
      $this->fileType = $fileType;
      $this->fileTypeId = $fileTypeId;
      $this->iccdid = $iccdid;
      $this->id = $id;
      $this->insertionDate = $insertionDate;
      $this->mimeType = $mimeType;
      $this->msisdn = $msisdn;
      $this->name = $name;
      $this->status = $status;
    }

}
