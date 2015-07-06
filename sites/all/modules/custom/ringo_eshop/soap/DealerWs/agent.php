<?php

class agent
{

    /**
     * @var string $address1
     * @access public
     */
    public $address1 = null;

    /**
     * @var string $address2
     * @access public
     */
    public $address2 = null;

    /**
     * @var agentActivity[] $agentActivityList
     * @access public
     */
    public $agentActivityList = null;

    /**
     * @var agentTemplate $agentTemplate
     * @access public
     */
    public $agentTemplate = null;

    /**
     * @var int $agentTemplateId
     * @access public
     */
    public $agentTemplateId = null;

    /**
     * @var string $agentcol
     * @access public
     */
    public $agentcol = null;

    /**
     * @var int $defaultPercentage
     * @access public
     */
    public $defaultPercentage = null;

    /**
     * @var string $deletedFlag
     * @access public
     */
    public $deletedFlag = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $disableEndusers
     * @access public
     */
    public $disableEndusers = null;

    /**
     * @var agentDocs $doc1
     * @access public
     */
    public $doc1 = null;

    /**
     * @var int $doc1Id
     * @access public
     */
    public $doc1Id = null;

    /**
     * @var agentDocs $doc2
     * @access public
     */
    public $doc2 = null;

    /**
     * @var int $doc2Id
     * @access public
     */
    public $doc2Id = null;

    /**
     * @var agentDocs $doc3
     * @access public
     */
    public $doc3 = null;

    /**
     * @var int $doc3Id
     * @access public
     */
    public $doc3Id = null;

    /**
     * @var agentDocs $doc4
     * @access public
     */
    public $doc4 = null;

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
     * @var int $loginAccess
     * @access public
     */
    public $loginAccess = null;

    /**
     * @var string $mobile
     * @access public
     */
    public $mobile = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var float $outstandingBalance
     * @access public
     */
    public $outstandingBalance = null;

    /**
     * @var string $phone
     * @access public
     */
    public $phone = null;

    /**
     * @var string $postcode
     * @access public
     */
    public $postcode = null;

    /**
     * @var string $secondContact
     * @access public
     */
    public $secondContact = null;

    /**
     * @var serviceProvider $serviceProvider
     * @access public
     */
    public $serviceProvider = null;

    /**
     * @var int $serviceProviderId
     * @access public
     */
    public $serviceProviderId = null;

    /**
     * @var simActivation[] $simActivationList
     * @access public
     */
    public $simActivationList = null;

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

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
     * @var float $totalGrossProfit
     * @access public
     */
    public $totalGrossProfit = null;

    /**
     * @var float $totalGrossProfitPayment
     * @access public
     */
    public $totalGrossProfitPayment = null;

    /**
     * @var float $totalKickback
     * @access public
     */
    public $totalKickback = null;

    /**
     * @var float $totalKickbackPayment
     * @access public
     */
    public $totalKickbackPayment = null;

    /**
     * @var float $totalPayment
     * @access public
     */
    public $totalPayment = null;

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
     * @var string $vat
     * @access public
     */
    public $vat = null;

    /**
     * @var float $viewAgentPercentage
     * @access public
     */
    public $viewAgentPercentage = null;

    /**
     * @var string $viewReports
     * @access public
     */
    public $viewReports = null;

    /**
     * @param string $address1
     * @param string $address2
     * @param agentTemplate $agentTemplate
     * @param int $agentTemplateId
     * @param string $agentcol
     * @param int $defaultPercentage
     * @param string $deletedFlag
     * @param string $description
     * @param string $disableEndusers
     * @param agentDocs $doc1
     * @param int $doc1Id
     * @param agentDocs $doc2
     * @param int $doc2Id
     * @param agentDocs $doc3
     * @param int $doc3Id
     * @param agentDocs $doc4
     * @param int $doc4Id
     * @param string $email
     * @param boolean $enableAutoAct
     * @param string $fax
     * @param string $firstContact
     * @param int $id
     * @param dateTime $insertionDate
     * @param base64Binary $legalDocument1
     * @param base64Binary $legalDocument2
     * @param int $loginAccess
     * @param string $mobile
     * @param string $name
     * @param float $outstandingBalance
     * @param string $phone
     * @param string $postcode
     * @param string $secondContact
     * @param serviceProvider $serviceProvider
     * @param int $serviceProviderId
     * @param int $status
     * @param timeZone $timeZone
     * @param int $timeZoneId
     * @param float $totalConsumption
     * @param float $totalCredit
     * @param float $totalCreditPayment
     * @param float $totalGrossProfit
     * @param float $totalGrossProfitPayment
     * @param float $totalKickback
     * @param float $totalKickbackPayment
     * @param float $totalPayment
     * @param string $userName
     * @param string $userPassword
     * @param string $vat
     * @param float $viewAgentPercentage
     * @param string $viewReports
     * @access public
     */
    public function __construct($address1, $address2, $agentTemplate, $agentTemplateId, $agentcol, $defaultPercentage, $deletedFlag, $description, $disableEndusers, $doc1, $doc1Id, $doc2, $doc2Id, $doc3, $doc3Id, $doc4, $doc4Id, $email, $enableAutoAct, $fax, $firstContact, $id, $insertionDate, $legalDocument1, $legalDocument2, $loginAccess, $mobile, $name, $outstandingBalance, $phone, $postcode, $secondContact, $serviceProvider, $serviceProviderId, $status, $timeZone, $timeZoneId, $totalConsumption, $totalCredit, $totalCreditPayment, $totalGrossProfit, $totalGrossProfitPayment, $totalKickback, $totalKickbackPayment, $totalPayment, $userName, $userPassword, $vat, $viewAgentPercentage, $viewReports)
    {
      $this->address1 = $address1;
      $this->address2 = $address2;
      $this->agentTemplate = $agentTemplate;
      $this->agentTemplateId = $agentTemplateId;
      $this->agentcol = $agentcol;
      $this->defaultPercentage = $defaultPercentage;
      $this->deletedFlag = $deletedFlag;
      $this->description = $description;
      $this->disableEndusers = $disableEndusers;
      $this->doc1 = $doc1;
      $this->doc1Id = $doc1Id;
      $this->doc2 = $doc2;
      $this->doc2Id = $doc2Id;
      $this->doc3 = $doc3;
      $this->doc3Id = $doc3Id;
      $this->doc4 = $doc4;
      $this->doc4Id = $doc4Id;
      $this->email = $email;
      $this->enableAutoAct = $enableAutoAct;
      $this->fax = $fax;
      $this->firstContact = $firstContact;
      $this->id = $id;
      $this->insertionDate = $insertionDate;
      $this->legalDocument1 = $legalDocument1;
      $this->legalDocument2 = $legalDocument2;
      $this->loginAccess = $loginAccess;
      $this->mobile = $mobile;
      $this->name = $name;
      $this->outstandingBalance = $outstandingBalance;
      $this->phone = $phone;
      $this->postcode = $postcode;
      $this->secondContact = $secondContact;
      $this->serviceProvider = $serviceProvider;
      $this->serviceProviderId = $serviceProviderId;
      $this->status = $status;
      $this->timeZone = $timeZone;
      $this->timeZoneId = $timeZoneId;
      $this->totalConsumption = $totalConsumption;
      $this->totalCredit = $totalCredit;
      $this->totalCreditPayment = $totalCreditPayment;
      $this->totalGrossProfit = $totalGrossProfit;
      $this->totalGrossProfitPayment = $totalGrossProfitPayment;
      $this->totalKickback = $totalKickback;
      $this->totalKickbackPayment = $totalKickbackPayment;
      $this->totalPayment = $totalPayment;
      $this->userName = $userName;
      $this->userPassword = $userPassword;
      $this->vat = $vat;
      $this->viewAgentPercentage = $viewAgentPercentage;
      $this->viewReports = $viewReports;
    }

}
