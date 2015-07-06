<?php

class simActivation
{

    /**
     * @var dateTime $activationDate
     * @access public
     */
    public $activationDate = null;

    /**
     * @var simStatus $activationStatus
     * @access public
     */
    public $activationStatus = null;

    /**
     * @var int $activationStatusId
     * @access public
     */
    public $activationStatusId = null;

    /**
     * @var string $addressNumber
     * @access public
     */
    public $addressNumber = null;

    /**
     * @var string $addressProvence
     * @access public
     */
    public $addressProvence = null;

    /**
     * @var string $addressTown
     * @access public
     */
    public $addressTown = null;

    /**
     * @var agent $agent
     * @access public
     */
    public $agent = null;

    /**
     * @var int $agentId
     * @access public
     */
    public $agentId = null;

    /**
     * @var string $citizenship
     * @access public
     */
    public $citizenship = null;

    /**
     * @var string $cityOfBirth
     * @access public
     */
    public $cityOfBirth = null;

    /**
     * @var string $cnic
     * @access public
     */
    public $cnic = null;

    /**
     * @var string $country
     * @access public
     */
    public $country = null;

    /**
     * @var string $creditTransfer
     * @access public
     */
    public $creditTransfer = null;

    /**
     * @var int $currencyId
     * @access public
     */
    public $currencyId = null;

    /**
     * @var dateTime $dateOfBirth
     * @access public
     */
    public $dateOfBirth = null;

    /**
     * @var string $disabledFlag
     * @access public
     */
    public $disabledFlag = null;

    /**
     * @var subscriberDocument $doc1
     * @access public
     */
    public $doc1 = null;

    /**
     * @var int $doc1Id
     * @access public
     */
    public $doc1Id = null;

    /**
     * @var subscriberDocument $doc2
     * @access public
     */
    public $doc2 = null;

    /**
     * @var int $doc2Id
     * @access public
     */
    public $doc2Id = null;

    /**
     * @var subscriberDocument $doc3
     * @access public
     */
    public $doc3 = null;

    /**
     * @var int $doc3Id
     * @access public
     */
    public $doc3Id = null;

    /**
     * @var subscriberDocument $doc4
     * @access public
     */
    public $doc4 = null;

    /**
     * @var int $doc4Id
     * @access public
     */
    public $doc4Id = null;

    /**
     * @var subscriberDocument $doc5
     * @access public
     */
    public $doc5 = null;

    /**
     * @var int $doc5Id
     * @access public
     */
    public $doc5Id = null;

    /**
     * @var dateTime $documentExpirationDate
     * @access public
     */
    public $documentExpirationDate = null;

    /**
     * @var string $documentNumber
     * @access public
     */
    public $documentNumber = null;

    /**
     * @var string $documentType
     * @access public
     */
    public $documentType = null;

    /**
     * @var string $email
     * @access public
     */
    public $email = null;

    /**
     * @var string $firstName
     * @access public
     */
    public $firstName = null;

    /**
     * @var string $flagTheft
     * @access public
     */
    public $flagTheft = null;

    /**
     * @var string $imsi
     * @access public
     */
    public $imsi = null;

    /**
     * @var int $languageId
     * @access public
     */
    public $languageId = null;

    /**
     * @var string $lastName
     * @access public
     */
    public $lastName = null;

    /**
     * @var string $mnpEnable
     * @access public
     */
    public $mnpEnable = null;

    /**
     * @var dateTime $mnpProcessStartDate
     * @access public
     */
    public $mnpProcessStartDate = null;

    /**
     * @var string $mobileNumber
     * @access public
     */
    public $mobileNumber = null;

    /**
     * @var string $msisdn
     * @access public
     */
    public $msisdn = null;

    /**
     * @var string $oldAccountType
     * @access public
     */
    public $oldAccountType = null;

    /**
     * @var string $oldICCID
     * @access public
     */
    public $oldICCID = null;

    /**
     * @var string $oldMobileNumber
     * @access public
     */
    public $oldMobileNumber = null;

    /**
     * @var string $oldServiceProviderName
     * @access public
     */
    public $oldServiceProviderName = null;

    /**
     * @var int $optionalConsent1
     * @access public
     */
    public $optionalConsent1 = null;

    /**
     * @var int $optionalConsent2
     * @access public
     */
    public $optionalConsent2 = null;

    /**
     * @var string $otherFixedNumber
     * @access public
     */
    public $otherFixedNumber = null;

    /**
     * @var string $otherMobileNumber
     * @access public
     */
    public $otherMobileNumber = null;

    /**
     * @var string $placeOfBirth
     * @access public
     */
    public $placeOfBirth = null;

    /**
     * @var bundleBucketMap $productOfferingGprs
     * @access public
     */
    public $productOfferingGprs = null;

    /**
     * @var bundleRegionMap $productOfferingInt
     * @access public
     */
    public $productOfferingInt = null;

    /**
     * @var bundleBucketMap $productOfferingSms
     * @access public
     */
    public $productOfferingSms = null;

    /**
     * @var bundleBucketMap $productOfferingVoice
     * @access public
     */
    public $productOfferingVoice = null;

    /**
     * @var string $provence
     * @access public
     */
    public $provence = null;

    /**
     * @var string $resedentialAddress
     * @access public
     */
    public $resedentialAddress = null;

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
     * @var string $sex
     * @access public
     */
    public $sex = null;

    /**
     * @var base64Binary $signature1
     * @access public
     */
    public $signature1 = null;

    /**
     * @var base64Binary $signature2
     * @access public
     */
    public $signature2 = null;

    /**
     * @var base64Binary $signature3
     * @access public
     */
    public $signature3 = null;

    /**
     * @var base64Binary $signature4
     * @access public
     */
    public $signature4 = null;

    /**
     * @var dateTime $signupDate
     * @access public
     */
    public $signupDate = null;

    /**
     * @var int $simActivationId
     * @access public
     */
    public $simActivationId = null;

    /**
     * @var string $tariffPlan
     * @access public
     */
    public $tariffPlan = null;

    /**
     * @var string $taxCode
     * @access public
     */
    public $taxCode = null;

    /**
     * @var string $vat
     * @access public
     */
    public $vat = null;

    /**
     * @var string $zipCode
     * @access public
     */
    public $zipCode = null;

    /**
     * @param dateTime $activationDate
     * @param simStatus $activationStatus
     * @param int $activationStatusId
     * @param string $addressNumber
     * @param string $addressProvence
     * @param string $addressTown
     * @param agent $agent
     * @param int $agentId
     * @param string $citizenship
     * @param string $cityOfBirth
     * @param string $cnic
     * @param string $country
     * @param string $creditTransfer
     * @param int $currencyId
     * @param dateTime $dateOfBirth
     * @param string $disabledFlag
     * @param subscriberDocument $doc1
     * @param int $doc1Id
     * @param subscriberDocument $doc2
     * @param int $doc2Id
     * @param subscriberDocument $doc3
     * @param int $doc3Id
     * @param subscriberDocument $doc4
     * @param int $doc4Id
     * @param subscriberDocument $doc5
     * @param int $doc5Id
     * @param dateTime $documentExpirationDate
     * @param string $documentNumber
     * @param string $documentType
     * @param string $email
     * @param string $firstName
     * @param string $flagTheft
     * @param string $imsi
     * @param int $languageId
     * @param string $lastName
     * @param string $mnpEnable
     * @param dateTime $mnpProcessStartDate
     * @param string $mobileNumber
     * @param string $msisdn
     * @param string $oldAccountType
     * @param string $oldICCID
     * @param string $oldMobileNumber
     * @param string $oldServiceProviderName
     * @param int $optionalConsent1
     * @param int $optionalConsent2
     * @param string $otherFixedNumber
     * @param string $otherMobileNumber
     * @param string $placeOfBirth
     * @param bundleBucketMap $productOfferingGprs
     * @param bundleRegionMap $productOfferingInt
     * @param bundleBucketMap $productOfferingSms
     * @param bundleBucketMap $productOfferingVoice
     * @param string $provence
     * @param string $resedentialAddress
     * @param serviceProvider $serviceProvider
     * @param int $serviceProviderId
     * @param string $sex
     * @param base64Binary $signature1
     * @param base64Binary $signature2
     * @param base64Binary $signature3
     * @param base64Binary $signature4
     * @param dateTime $signupDate
     * @param int $simActivationId
     * @param string $tariffPlan
     * @param string $taxCode
     * @param string $vat
     * @param string $zipCode
     * @access public
     */
    public function __construct($activationDate, $activationStatus, $activationStatusId, $addressNumber, $addressProvence, $addressTown, $agent, $agentId, $citizenship, $cityOfBirth, $cnic, $country, $creditTransfer, $currencyId, $dateOfBirth, $disabledFlag, $doc1, $doc1Id, $doc2, $doc2Id, $doc3, $doc3Id, $doc4, $doc4Id, $doc5, $doc5Id, $documentExpirationDate, $documentNumber, $documentType, $email, $firstName, $flagTheft, $imsi, $languageId, $lastName, $mnpEnable, $mnpProcessStartDate, $mobileNumber, $msisdn, $oldAccountType, $oldICCID, $oldMobileNumber, $oldServiceProviderName, $optionalConsent1, $optionalConsent2, $otherFixedNumber, $otherMobileNumber, $placeOfBirth, $productOfferingGprs, $productOfferingInt, $productOfferingSms, $productOfferingVoice, $provence, $resedentialAddress, $serviceProvider, $serviceProviderId, $sex, $signature1, $signature2, $signature3, $signature4, $signupDate, $simActivationId, $tariffPlan, $taxCode, $vat, $zipCode)
    {
      $this->activationDate = $activationDate;
      $this->activationStatus = $activationStatus;
      $this->activationStatusId = $activationStatusId;
      $this->addressNumber = $addressNumber;
      $this->addressProvence = $addressProvence;
      $this->addressTown = $addressTown;
      $this->agent = $agent;
      $this->agentId = $agentId;
      $this->citizenship = $citizenship;
      $this->cityOfBirth = $cityOfBirth;
      $this->cnic = $cnic;
      $this->country = $country;
      $this->creditTransfer = $creditTransfer;
      $this->currencyId = $currencyId;
      $this->dateOfBirth = $dateOfBirth;
      $this->disabledFlag = $disabledFlag;
      $this->doc1 = $doc1;
      $this->doc1Id = $doc1Id;
      $this->doc2 = $doc2;
      $this->doc2Id = $doc2Id;
      $this->doc3 = $doc3;
      $this->doc3Id = $doc3Id;
      $this->doc4 = $doc4;
      $this->doc4Id = $doc4Id;
      $this->doc5 = $doc5;
      $this->doc5Id = $doc5Id;
      $this->documentExpirationDate = $documentExpirationDate;
      $this->documentNumber = $documentNumber;
      $this->documentType = $documentType;
      $this->email = $email;
      $this->firstName = $firstName;
      $this->flagTheft = $flagTheft;
      $this->imsi = $imsi;
      $this->languageId = $languageId;
      $this->lastName = $lastName;
      $this->mnpEnable = $mnpEnable;
      $this->mnpProcessStartDate = $mnpProcessStartDate;
      $this->mobileNumber = $mobileNumber;
      $this->msisdn = $msisdn;
      $this->oldAccountType = $oldAccountType;
      $this->oldICCID = $oldICCID;
      $this->oldMobileNumber = $oldMobileNumber;
      $this->oldServiceProviderName = $oldServiceProviderName;
      $this->optionalConsent1 = $optionalConsent1;
      $this->optionalConsent2 = $optionalConsent2;
      $this->otherFixedNumber = $otherFixedNumber;
      $this->otherMobileNumber = $otherMobileNumber;
      $this->placeOfBirth = $placeOfBirth;
      $this->productOfferingGprs = $productOfferingGprs;
      $this->productOfferingInt = $productOfferingInt;
      $this->productOfferingSms = $productOfferingSms;
      $this->productOfferingVoice = $productOfferingVoice;
      $this->provence = $provence;
      $this->resedentialAddress = $resedentialAddress;
      $this->serviceProvider = $serviceProvider;
      $this->serviceProviderId = $serviceProviderId;
      $this->sex = $sex;
      $this->signature1 = $signature1;
      $this->signature2 = $signature2;
      $this->signature3 = $signature3;
      $this->signature4 = $signature4;
      $this->signupDate = $signupDate;
      $this->simActivationId = $simActivationId;
      $this->tariffPlan = $tariffPlan;
      $this->taxCode = $taxCode;
      $this->vat = $vat;
      $this->zipCode = $zipCode;
    }

}
