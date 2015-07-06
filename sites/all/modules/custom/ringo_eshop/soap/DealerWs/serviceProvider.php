<?php

class serviceProvider
{

    /**
     * @var int $creditWarningThresholdAmt
     * @access public
     */
    public $creditWarningThresholdAmt = null;

    /**
     * @var int $creditWarningThresholdPct
     * @access public
     */
    public $creditWarningThresholdPct = null;

    /**
     * @var boolean $deletedFlag
     * @access public
     */
    public $deletedFlag = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var boolean $disabledFlag
     * @access public
     */
    public $disabledFlag = null;

    /**
     * @var int $doc1Id
     * @access public
     */
    public $doc1Id = null;

    /**
     * @var int $doc2Id
     * @access public
     */
    public $doc2Id = null;

    /**
     * @var int $doc3Id
     * @access public
     */
    public $doc3Id = null;

    /**
     * @var int $doc4Id
     * @access public
     */
    public $doc4Id = null;

    /**
     * @var string $email
     * @access public
     */
    public $email = null;

    /**
     * @var string $emailInvoice
     * @access public
     */
    public $emailInvoice = null;

    /**
     * @var boolean $enableAutoAct
     * @access public
     */
    public $enableAutoAct = null;

    /**
     * @var string $fax
     * @access public
     */
    public $fax = null;

    /**
     * @var string $firstContact
     * @access public
     */
    public $firstContact = null;

    /**
     * @var dateTime $insertionDate
     * @access public
     */
    public $insertionDate = null;

    /**
     * @var string $lcity
     * @access public
     */
    public $lcity = null;

    /**
     * @var string $legalAddress
     * @access public
     */
    public $legalAddress = null;

    /**
     * @var base64Binary $legalDocument1
     * @access public
     */
    public $legalDocument1 = null;

    /**
     * @var base64Binary $legalDocument2
     * @access public
     */
    public $legalDocument2 = null;

    /**
     * @var string $lpostalCode
     * @access public
     */
    public $lpostalCode = null;

    /**
     * @var string $lprovince
     * @access public
     */
    public $lprovince = null;

    /**
     * @var string $mobile
     * @access public
     */
    public $mobile = null;

    /**
     * @var float $monthlyConsumptionTarget
     * @access public
     */
    public $monthlyConsumptionTarget = null;

    /**
     * @var int $monthlyTargetSim
     * @access public
     */
    public $monthlyTargetSim = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $ocity
     * @access public
     */
    public $ocity = null;

    /**
     * @var string $operationalAddress
     * @access public
     */
    public $operationalAddress = null;

    /**
     * @var string $opostalCode
     * @access public
     */
    public $opostalCode = null;

    /**
     * @var string $oprovince
     * @access public
     */
    public $oprovince = null;

    /**
     * @var serviceProvider $parentDistributor
     * @access public
     */
    public $parentDistributor = null;

    /**
     * @var int $parentDistributorId
     * @access public
     */
    public $parentDistributorId = null;

    /**
     * @var serviceProvider $parentSp
     * @access public
     */
    public $parentSp = null;

    /**
     * @var int $parentSpId
     * @access public
     */
    public $parentSpId = null;

    /**
     * @var serviceProvider[] $parentSpIdList
     * @access public
     */
    public $parentSpIdList = null;

    /**
     * @var string $partitionKey
     * @access public
     */
    public $partitionKey = null;

    /**
     * @var string $phoneNumber
     * @access public
     */
    public $phoneNumber = null;

    /**
     * @var string $secondContact
     * @access public
     */
    public $secondContact = null;

    /**
     * @var int $serviceProviderId
     * @access public
     */
    public $serviceProviderId = null;

    /**
     * @var serviceProviderType $serviceProviderType
     * @access public
     */
    public $serviceProviderType = null;

    /**
     * @var int $serviceProviderTypeId
     * @access public
     */
    public $serviceProviderTypeId = null;

    /**
     * @var string $skype
     * @access public
     */
    public $skype = null;

    /**
     * @var spAccountActivity[] $spAccountActivityList
     * @access public
     */
    public $spAccountActivityList = null;

    /**
     * @var int $statusId
     * @access public
     */
    public $statusId = null;

    /**
     * @var string $taxCode
     * @access public
     */
    public $taxCode = null;

    /**
     * @var string $temporaryPassword
     * @access public
     */
    public $temporaryPassword = null;

    /**
     * @var timeZone $timeZone
     * @access public
     */
    public $timeZone = null;

    /**
     * @var int $timeZoneId
     * @access public
     */
    public $timeZoneId = null;

    /**
     * @var float $totalConsumption
     * @access public
     */
    public $totalConsumption = null;

    /**
     * @var float $totalCredit
     * @access public
     */
    public $totalCredit = null;

    /**
     * @var float $totalCreditPayment
     * @access public
     */
    public $totalCreditPayment = null;

    /**
     * @var float $totalPayment
     * @access public
     */
    public $totalPayment = null;

    /**
     * @var user[] $userList
     * @access public
     */
    public $userList = null;

    /**
     * @var string $vat
     * @access public
     */
    public $vat = null;

    /**
     * @param int $creditWarningThresholdAmt
     * @param int $creditWarningThresholdPct
     * @param boolean $deletedFlag
     * @param string $description
     * @param boolean $disabledFlag
     * @param int $doc1Id
     * @param int $doc2Id
     * @param int $doc3Id
     * @param int $doc4Id
     * @param string $email
     * @param string $emailInvoice
     * @param boolean $enableAutoAct
     * @param string $fax
     * @param string $firstContact
     * @param dateTime $insertionDate
     * @param string $lcity
     * @param string $legalAddress
     * @param base64Binary $legalDocument1
     * @param base64Binary $legalDocument2
     * @param string $lpostalCode
     * @param string $lprovince
     * @param string $mobile
     * @param float $monthlyConsumptionTarget
     * @param int $monthlyTargetSim
     * @param string $name
     * @param string $ocity
     * @param string $operationalAddress
     * @param string $opostalCode
     * @param string $oprovince
     * @param serviceProvider $parentDistributor
     * @param int $parentDistributorId
     * @param serviceProvider $parentSp
     * @param int $parentSpId
     * @param string $partitionKey
     * @param string $phoneNumber
     * @param string $secondContact
     * @param int $serviceProviderId
     * @param serviceProviderType $serviceProviderType
     * @param int $serviceProviderTypeId
     * @param string $skype
     * @param int $statusId
     * @param string $taxCode
     * @param string $temporaryPassword
     * @param timeZone $timeZone
     * @param int $timeZoneId
     * @param float $totalConsumption
     * @param float $totalCredit
     * @param float $totalCreditPayment
     * @param float $totalPayment
     * @param string $vat
     * @access public
     */
    public function __construct($creditWarningThresholdAmt, $creditWarningThresholdPct, $deletedFlag, $description, $disabledFlag, $doc1Id, $doc2Id, $doc3Id, $doc4Id, $email, $emailInvoice, $enableAutoAct, $fax, $firstContact, $insertionDate, $lcity, $legalAddress, $legalDocument1, $legalDocument2, $lpostalCode, $lprovince, $mobile, $monthlyConsumptionTarget, $monthlyTargetSim, $name, $ocity, $operationalAddress, $opostalCode, $oprovince, $parentDistributor, $parentDistributorId, $parentSp, $parentSpId, $partitionKey, $phoneNumber, $secondContact, $serviceProviderId, $serviceProviderType, $serviceProviderTypeId, $skype, $statusId, $taxCode, $temporaryPassword, $timeZone, $timeZoneId, $totalConsumption, $totalCredit, $totalCreditPayment, $totalPayment, $vat)
    {
      $this->creditWarningThresholdAmt = $creditWarningThresholdAmt;
      $this->creditWarningThresholdPct = $creditWarningThresholdPct;
      $this->deletedFlag = $deletedFlag;
      $this->description = $description;
      $this->disabledFlag = $disabledFlag;
      $this->doc1Id = $doc1Id;
      $this->doc2Id = $doc2Id;
      $this->doc3Id = $doc3Id;
      $this->doc4Id = $doc4Id;
      $this->email = $email;
      $this->emailInvoice = $emailInvoice;
      $this->enableAutoAct = $enableAutoAct;
      $this->fax = $fax;
      $this->firstContact = $firstContact;
      $this->insertionDate = $insertionDate;
      $this->lcity = $lcity;
      $this->legalAddress = $legalAddress;
      $this->legalDocument1 = $legalDocument1;
      $this->legalDocument2 = $legalDocument2;
      $this->lpostalCode = $lpostalCode;
      $this->lprovince = $lprovince;
      $this->mobile = $mobile;
      $this->monthlyConsumptionTarget = $monthlyConsumptionTarget;
      $this->monthlyTargetSim = $monthlyTargetSim;
      $this->name = $name;
      $this->ocity = $ocity;
      $this->operationalAddress = $operationalAddress;
      $this->opostalCode = $opostalCode;
      $this->oprovince = $oprovince;
      $this->parentDistributor = $parentDistributor;
      $this->parentDistributorId = $parentDistributorId;
      $this->parentSp = $parentSp;
      $this->parentSpId = $parentSpId;
      $this->partitionKey = $partitionKey;
      $this->phoneNumber = $phoneNumber;
      $this->secondContact = $secondContact;
      $this->serviceProviderId = $serviceProviderId;
      $this->serviceProviderType = $serviceProviderType;
      $this->serviceProviderTypeId = $serviceProviderTypeId;
      $this->skype = $skype;
      $this->statusId = $statusId;
      $this->taxCode = $taxCode;
      $this->temporaryPassword = $temporaryPassword;
      $this->timeZone = $timeZone;
      $this->timeZoneId = $timeZoneId;
      $this->totalConsumption = $totalConsumption;
      $this->totalCredit = $totalCredit;
      $this->totalCreditPayment = $totalCreditPayment;
      $this->totalPayment = $totalPayment;
      $this->vat = $vat;
    }

}
