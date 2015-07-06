<?php

include_once('basicNumasResponse.php');

class customerResponse extends basicNumasResponse
{

    /**
     * @var string $birthCountry
     * @access public
     */
    public $birthCountry = null;

    /**
     * @var anySimpleType $birthDate
     * @access public
     */
    public $birthDate = null;

    /**
     * @var string $birthLocation
     * @access public
     */
    public $birthLocation = null;

    /**
     * @var string $birthLocationPostalCode
     * @access public
     */
    public $birthLocationPostalCode = null;

    /**
     * @var string $birthProvince
     * @access public
     */
    public $birthProvince = null;

    /**
     * @var string $businessArea
     * @access public
     */
    public $businessArea = null;

    /**
     * @var anySimpleType $changeDate
     * @access public
     */
    public $changeDate = null;

    /**
     * @var string $citizenship
     * @access public
     */
    public $citizenship = null;

    /**
     * @var string $companyAddress
     * @access public
     */
    public $companyAddress = null;

    /**
     * @var string $companyCity
     * @access public
     */
    public $companyCity = null;

    /**
     * @var string $companyEmail
     * @access public
     */
    public $companyEmail = null;

    /**
     * @var string $companyFax
     * @access public
     */
    public $companyFax = null;

    /**
     * @var string $companyName
     * @access public
     */
    public $companyName = null;

    /**
     * @var string $companyPhoneNumber
     * @access public
     */
    public $companyPhoneNumber = null;

    /**
     * @var string $companyPostalCode
     * @access public
     */
    public $companyPostalCode = null;

    /**
     * @var string $companyProvince
     * @access public
     */
    public $companyProvince = null;

    /**
     * @var string $companyStreetNumber
     * @access public
     */
    public $companyStreetNumber = null;

    /**
     * @var string $customerEmail
     * @access public
     */
    public $customerEmail = null;

    /**
     * @var int $customerId
     * @access public
     */
    public $customerId = null;

    /**
     * @var int $customerProfileId
     * @access public
     */
    public $customerProfileId = null;

    /**
     * @var int $customerType
     * @access public
     */
    public $customerType = null;

    /**
     * @var string $documentCity
     * @access public
     */
    public $documentCity = null;

    /**
     * @var anySimpleType $documentExpirationDate
     * @access public
     */
    public $documentExpirationDate = null;

    /**
     * @var string $documentTypeId
     * @access public
     */
    public $documentTypeId = null;

    /**
     * @var int $gender
     * @access public
     */
    public $gender = null;

    /**
     * @var anySimpleType $insertDate
     * @access public
     */
    public $insertDate = null;

    /**
     * @var string $lastname
     * @access public
     */
    public $lastname = null;

    /**
     * @var string $mobileNumber
     * @access public
     */
    public $mobileNumber = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $novercaIccid
     * @access public
     */
    public $novercaIccid = null;

    /**
     * @var int $optionalConsent
     * @access public
     */
    public $optionalConsent = null;

    /**
     * @var int $parentCustomerAccountId
     * @access public
     */
    public $parentCustomerAccountId = null;

    /**
     * @var string $personalDocumentCode
     * @access public
     */
    public $personalDocumentCode = null;

    /**
     * @var string $phoneNumber
     * @access public
     */
    public $phoneNumber = null;

    /**
     * @var string $postalCode
     * @access public
     */
    public $postalCode = null;

    /**
     * @var int $realmId
     * @access public
     */
    public $realmId = null;

    /**
     * @var string $representativeDocumentCode
     * @access public
     */
    public $representativeDocumentCode = null;

    /**
     * @var string $representativeLastname
     * @access public
     */
    public $representativeLastname = null;

    /**
     * @var string $representativeName
     * @access public
     */
    public $representativeName = null;

    /**
     * @var string $residenceAddress
     * @access public
     */
    public $residenceAddress = null;

    /**
     * @var string $residenceCity
     * @access public
     */
    public $residenceCity = null;

    /**
     * @var string $residenceProvince
     * @access public
     */
    public $residenceProvince = null;

    /**
     * @var string $residenceStreetNumber
     * @access public
     */
    public $residenceStreetNumber = null;

    /**
     * @var int $simLimit
     * @access public
     */
    public $simLimit = null;

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
     * @param int $code
     * @param string $message
     * @param string $birthCountry
     * @param anySimpleType $birthDate
     * @param string $birthLocation
     * @param string $birthLocationPostalCode
     * @param string $birthProvince
     * @param string $businessArea
     * @param anySimpleType $changeDate
     * @param string $citizenship
     * @param string $companyAddress
     * @param string $companyCity
     * @param string $companyEmail
     * @param string $companyFax
     * @param string $companyName
     * @param string $companyPhoneNumber
     * @param string $companyPostalCode
     * @param string $companyProvince
     * @param string $companyStreetNumber
     * @param string $customerEmail
     * @param int $customerId
     * @param int $customerProfileId
     * @param int $customerType
     * @param string $documentCity
     * @param anySimpleType $documentExpirationDate
     * @param string $documentTypeId
     * @param int $gender
     * @param anySimpleType $insertDate
     * @param string $lastname
     * @param string $mobileNumber
     * @param string $name
     * @param string $novercaIccid
     * @param int $optionalConsent
     * @param int $parentCustomerAccountId
     * @param string $personalDocumentCode
     * @param string $phoneNumber
     * @param string $postalCode
     * @param int $realmId
     * @param string $representativeDocumentCode
     * @param string $representativeLastname
     * @param string $representativeName
     * @param string $residenceAddress
     * @param string $residenceCity
     * @param string $residenceProvince
     * @param string $residenceStreetNumber
     * @param int $simLimit
     * @param string $taxCode
     * @param string $vat
     * @access public
     */
    public function __construct($code, $message, $birthCountry, $birthDate, $birthLocation, $birthLocationPostalCode, $birthProvince, $businessArea, $changeDate, $citizenship, $companyAddress, $companyCity, $companyEmail, $companyFax, $companyName, $companyPhoneNumber, $companyPostalCode, $companyProvince, $companyStreetNumber, $customerEmail, $customerId, $customerProfileId, $customerType, $documentCity, $documentExpirationDate, $documentTypeId, $gender, $insertDate, $lastname, $mobileNumber, $name, $novercaIccid, $optionalConsent, $parentCustomerAccountId, $personalDocumentCode, $phoneNumber, $postalCode, $realmId, $representativeDocumentCode, $representativeLastname, $representativeName, $residenceAddress, $residenceCity, $residenceProvince, $residenceStreetNumber, $simLimit, $taxCode, $vat)
    {
      parent::__construct($code, $message);
      $this->birthCountry = $birthCountry;
      $this->birthDate = $birthDate;
      $this->birthLocation = $birthLocation;
      $this->birthLocationPostalCode = $birthLocationPostalCode;
      $this->birthProvince = $birthProvince;
      $this->businessArea = $businessArea;
      $this->changeDate = $changeDate;
      $this->citizenship = $citizenship;
      $this->companyAddress = $companyAddress;
      $this->companyCity = $companyCity;
      $this->companyEmail = $companyEmail;
      $this->companyFax = $companyFax;
      $this->companyName = $companyName;
      $this->companyPhoneNumber = $companyPhoneNumber;
      $this->companyPostalCode = $companyPostalCode;
      $this->companyProvince = $companyProvince;
      $this->companyStreetNumber = $companyStreetNumber;
      $this->customerEmail = $customerEmail;
      $this->customerId = $customerId;
      $this->customerProfileId = $customerProfileId;
      $this->customerType = $customerType;
      $this->documentCity = $documentCity;
      $this->documentExpirationDate = $documentExpirationDate;
      $this->documentTypeId = $documentTypeId;
      $this->gender = $gender;
      $this->insertDate = $insertDate;
      $this->lastname = $lastname;
      $this->mobileNumber = $mobileNumber;
      $this->name = $name;
      $this->novercaIccid = $novercaIccid;
      $this->optionalConsent = $optionalConsent;
      $this->parentCustomerAccountId = $parentCustomerAccountId;
      $this->personalDocumentCode = $personalDocumentCode;
      $this->phoneNumber = $phoneNumber;
      $this->postalCode = $postalCode;
      $this->realmId = $realmId;
      $this->representativeDocumentCode = $representativeDocumentCode;
      $this->representativeLastname = $representativeLastname;
      $this->representativeName = $representativeName;
      $this->residenceAddress = $residenceAddress;
      $this->residenceCity = $residenceCity;
      $this->residenceProvince = $residenceProvince;
      $this->residenceStreetNumber = $residenceStreetNumber;
      $this->simLimit = $simLimit;
      $this->taxCode = $taxCode;
      $this->vat = $vat;
    }

}
