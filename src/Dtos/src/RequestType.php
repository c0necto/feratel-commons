<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RequestType
 *
 * Basic request object. Contains access rights information plus alternating data for specific request.
 * XSD Type: RequestType
 */
class RequestType
{
    /**
     * @var string $originator
     */
    private $originator = null;

    /**
     * @var string $company
     */
    private $company = null;

    /**
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * @var string $productCode
     */
    private $productCode = null;

    /**
     * Used to identify data language for text values. The human language is identified by ISO 639 codes.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RangeType $range
     */
    private $range = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestDetailsType $requestDetails
     */
    private $requestDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchLinesType $searchLines
     */
    private $searchLines = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchType $additionalServicesSearch
     */
    private $additionalServicesSearch = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackagesSearchType $packagesSearch
     */
    private $packagesSearch = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsSearchType $packageDetailsSearch
     */
    private $packageDetailsSearch = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType $packageCalculationSearch
     */
    private $packageCalculationSearch = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicDataType $basicData
     */
    private $basicData = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXBasicDataRequestType $oNAXBasicDataRequest
     */
    private $oNAXBasicDataRequest = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\KeyValuesType $keyValues
     */
    private $keyValues = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ImportDataType $importData
     */
    private $importData = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\EventSearchType $eventSearch
     */
    private $eventSearch = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuestNewType $guestInsert
     */
    private $guestInsert = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuestFullType $guestUpdate
     */
    private $guestUpdate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuestBasicType $guestDelete
     */
    private $guestDelete = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuestBasicType $guest
     */
    private $guest = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShowShoppingCartType $showShoppingCart
     */
    private $showShoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CreateShoppingCartType $createShoppingCart
     */
    private $createShoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AddToShoppingCartType $addToShoppingCart
     */
    private $addToShoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DeleteFromShoppingCartType $deleteFromShoppingCart
     */
    private $deleteFromShoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeToShoppingCartType $setOptionalGuaranteeToShoppingCart
     */
    private $setOptionalGuaranteeToShoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\UpdateShoppingCartPaymentMethodType $updateShoppingCartPaymentMethod
     */
    private $updateShoppingCartPaymentMethod = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\UpdateShoppingCartSettingsType $updateShoppingCartSettings
     */
    private $updateShoppingCartSettings = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType $updateShoppingCartExternal
     */
    private $updateShoppingCartExternal = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CommitShoppingCartType $commitShoppingCart
     */
    private $commitShoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRQType $electronicPaymentCheckOut
     */
    private $electronicPaymentCheckOut = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShowBookingType $showBooking
     */
    private $showBooking = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CheckShoppingCartStatusType $checkShoppingCartStatus
     */
    private $checkShoppingCartStatus = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ReadTransactionsType $readTransactions
     */
    private $readTransactions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CancelBookingType $cancelBooking
     */
    private $cancelBooking = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GetOrganisationInformationType $getOrganisationInformation
     */
    private $getOrganisationInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CalculateOptionalFeesForShoppingCartType $calculateOptionalFeesForShoppingCart
     */
    private $calculateOptionalFeesForShoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PushTransactionType $pushTransaction
     */
    private $pushTransaction = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GetResultType $getResult
     */
    private $getResult = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GetCEDataType $getCEData
     */
    private $getCEData = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CountClickType $countClick
     */
    private $countClick = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LanguageType[] $languages
     */
    private $languages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLGetKeyValuesType $getKeyValues
     */
    private $getKeyValues = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LanguageType[] $translations
     */
    private $translations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLGetAddressesType $getAddresses
     */
    private $getAddresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLGetAddressesType $getDeletedAddresses
     */
    private $getDeletedAddresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLInsertAddressType[] $insertAddresses
     */
    private $insertAddresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLUpdateAddressType $updateAddress
     */
    private $updateAddress = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewsletterSendType[] $newslettersSend
     */
    private $newslettersSend = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType[] $newslettersSubscriptions
     */
    private $newslettersSubscriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType[] $newslettersUnsubscriptions
     */
    private $newslettersUnsubscriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentsSubscriptions
     */
    private $consentsSubscriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentsUnsubscriptions
     */
    private $consentsUnsubscriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GetAvailabilitiesType $getAvailabilities
     */
    private $getAvailabilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInsertWebLinkType $insertWebLink
     */
    private $insertWebLink = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\GetCancellationInformationAType $getCancellationInformation
     */
    private $getCancellationInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\GetPaymentInformationAType $getPaymentInformation
     */
    private $getPaymentInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType[] $importInfrastructureItems
     */
    private $importInfrastructureItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType[] $importEvents
     */
    private $importEvents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\GetStandardInformationFormAType $getStandardInformationForm
     */
    private $getStandardInformationForm = null;

    public function __construct(string $originator = null, \Conecto\FeratelDsi\Dtos\NLGetAddressesType $getDeletedAddresses = null, \Conecto\FeratelDsi\Dtos\ReadTransactionsType $readTransactions = null, \Conecto\FeratelDsi\Dtos\ShowBookingType $showBooking = null, \Conecto\FeratelDsi\Dtos\GetOrganisationInformationType $getOrganisationInformation = null, \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeToShoppingCartType $setOptionalGuaranteeToShoppingCart = null, \Conecto\FeratelDsi\Dtos\UpdateShoppingCartSettingsType $updateShoppingCartSettings = null, \Conecto\FeratelDsi\Dtos\AddToShoppingCartType $addToShoppingCart = null, \Conecto\FeratelDsi\Dtos\GetCEDataType $getCEData = null, \Conecto\FeratelDsi\Dtos\PushTransactionType $pushTransaction = null, array $languages = null, \Conecto\FeratelDsi\Dtos\GuestBasicType $guestDelete = null, \Conecto\FeratelDsi\Dtos\ShowShoppingCartType $showShoppingCart = null, \Conecto\FeratelDsi\Dtos\ImportDataType $importData = null, \Conecto\FeratelDsi\Dtos\RequestDetailsType $requestDetails = null, array $translations = null, \Conecto\FeratelDsi\Dtos\GuestNewType $guestInsert = null, \Conecto\FeratelDsi\Dtos\NLUpdateAddressType $updateAddress = null, \Conecto\FeratelDsi\Dtos\BasicDataType $basicData = null, array $newslettersSubscriptions = null, \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType $packageCalculationSearch = null, array $consentsSubscriptions = null, \Conecto\FeratelDsi\Dtos\ONAXBasicDataRequestType $oNAXBasicDataRequest = null, \Conecto\FeratelDsi\Dtos\GetAvailabilitiesType $getAvailabilities = null, \Conecto\FeratelDsi\Dtos\PackagesSearchType $packagesSearch = null, \Conecto\FeratelDsi\Dtos\RequestType\GetCancellationInformationAType $getCancellationInformation = null, \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchType $additionalServicesSearch = null, array $importInfrastructureItems = null, \Conecto\FeratelDsi\Dtos\PackageDetailsSearchType $packageDetailsSearch = null, \Conecto\FeratelDsi\Dtos\CommitShoppingCartType $commitShoppingCart = null, \Conecto\FeratelDsi\Dtos\SearchLinesType $searchLines = null, \Conecto\FeratelDsi\Dtos\RangeType $range = null, \Conecto\FeratelDsi\Dtos\NLGetAddressesType $getAddresses = null, \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRQType $electronicPaymentCheckOut = null, \Conecto\FeratelDsi\Dtos\CancelBookingType $cancelBooking = null, \Conecto\FeratelDsi\Dtos\CheckShoppingCartStatusType $checkShoppingCartStatus = null, \Conecto\FeratelDsi\Dtos\CalculateOptionalFeesForShoppingCartType $calculateOptionalFeesForShoppingCart = null, \Conecto\FeratelDsi\Dtos\UpdateShoppingCartPaymentMethodType $updateShoppingCartPaymentMethod = null, \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType $updateShoppingCartExternal = null, \Conecto\FeratelDsi\Dtos\DeleteFromShoppingCartType $deleteFromShoppingCart = null, \Conecto\FeratelDsi\Dtos\CountClickType $countClick = null, \Conecto\FeratelDsi\Dtos\GetResultType $getResult = null, \Conecto\FeratelDsi\Dtos\NLGetKeyValuesType $getKeyValues = null, \Conecto\FeratelDsi\Dtos\GuestBasicType $guest = null, \Conecto\FeratelDsi\Dtos\CreateShoppingCartType $createShoppingCart = null, \Conecto\FeratelDsi\Dtos\EventSearchType $eventSearch = null, array $insertAddresses = null, string $company = null, \Conecto\FeratelDsi\Dtos\GuestFullType $guestUpdate = null, array $newslettersSend = null, string $hotelCode = null, array $newslettersUnsubscriptions = null, string $productCode = null, array $consentsUnsubscriptions = null, \Conecto\FeratelDsi\Dtos\KeyValuesType $keyValues = null, \Conecto\FeratelDsi\Dtos\BDInsertWebLinkType $insertWebLink = null, string $currencyCode = null, \Conecto\FeratelDsi\Dtos\RequestType\GetPaymentInformationAType $getPaymentInformation = null, string $dBCode = null, array $importEvents = null, string $language = null, \Conecto\FeratelDsi\Dtos\RequestType\GetStandardInformationFormAType $getStandardInformationForm = null)
    {
        $this->originator = $originator;
        $this->company = $company;
        $this->hotelCode = $hotelCode;
        $this->productCode = $productCode;
        $this->language = $language;
        $this->currencyCode = $currencyCode;
        $this->dBCode = $dBCode;
        $this->range = $range;
        $this->requestDetails = $requestDetails;
        $this->searchLines = $searchLines;
        $this->additionalServicesSearch = $additionalServicesSearch;
        $this->packagesSearch = $packagesSearch;
        $this->packageDetailsSearch = $packageDetailsSearch;
        $this->packageCalculationSearch = $packageCalculationSearch;
        $this->basicData = $basicData;
        $this->oNAXBasicDataRequest = $oNAXBasicDataRequest;
        $this->keyValues = $keyValues;
        $this->importData = $importData;
        $this->eventSearch = $eventSearch;
        $this->guestInsert = $guestInsert;
        $this->guestUpdate = $guestUpdate;
        $this->guestDelete = $guestDelete;
        $this->guest = $guest;
        $this->showShoppingCart = $showShoppingCart;
        $this->createShoppingCart = $createShoppingCart;
        $this->addToShoppingCart = $addToShoppingCart;
        $this->deleteFromShoppingCart = $deleteFromShoppingCart;
        $this->setOptionalGuaranteeToShoppingCart = $setOptionalGuaranteeToShoppingCart;
        $this->updateShoppingCartPaymentMethod = $updateShoppingCartPaymentMethod;
        $this->updateShoppingCartSettings = $updateShoppingCartSettings;
        $this->updateShoppingCartExternal = $updateShoppingCartExternal;
        $this->commitShoppingCart = $commitShoppingCart;
        $this->electronicPaymentCheckOut = $electronicPaymentCheckOut;
        $this->showBooking = $showBooking;
        $this->checkShoppingCartStatus = $checkShoppingCartStatus;
        $this->readTransactions = $readTransactions;
        $this->cancelBooking = $cancelBooking;
        $this->getOrganisationInformation = $getOrganisationInformation;
        $this->calculateOptionalFeesForShoppingCart = $calculateOptionalFeesForShoppingCart;
        $this->pushTransaction = $pushTransaction;
        $this->getResult = $getResult;
        $this->getCEData = $getCEData;
        $this->countClick = $countClick;
        $this->languages = $languages;
        $this->getKeyValues = $getKeyValues;
        $this->translations = $translations;
        $this->getAddresses = $getAddresses;
        $this->getDeletedAddresses = $getDeletedAddresses;
        $this->insertAddresses = $insertAddresses;
        $this->updateAddress = $updateAddress;
        $this->newslettersSend = $newslettersSend;
        $this->newslettersSubscriptions = $newslettersSubscriptions;
        $this->newslettersUnsubscriptions = $newslettersUnsubscriptions;
        $this->consentsSubscriptions = $consentsSubscriptions;
        $this->consentsUnsubscriptions = $consentsUnsubscriptions;
        $this->getAvailabilities = $getAvailabilities;
        $this->insertWebLink = $insertWebLink;
        $this->getCancellationInformation = $getCancellationInformation;
        $this->getPaymentInformation = $getPaymentInformation;
        $this->importInfrastructureItems = $importInfrastructureItems;
        $this->importEvents = $importEvents;
        $this->getStandardInformationForm = $getStandardInformationForm;
    }

    /**
     * Gets as originator
     *
     * @return string
     */
    public function getOriginator()
    {
        return $this->originator;
    }

    /**
     * Sets a new originator
     *
     * @param string $originator
     * @return self
     */
    public function setOriginator($originator)
    {
        $this->originator = $originator;
        return $this;
    }

    /**
     * Gets as company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as productCode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * @param string $productCode
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * Gets as language
     *
     * Used to identify data language for text values. The human language is identified by ISO 639 codes.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Used to identify data language for text values. The human language is identified by ISO 639 codes.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }

    /**
     * Gets as range
     *
     * @return \Conecto\FeratelDsi\Dtos\RangeType
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * @param \Conecto\FeratelDsi\Dtos\RangeType $range
     * @return self
     */
    public function setRange(?\Conecto\FeratelDsi\Dtos\RangeType $range = null)
    {
        $this->range = $range;
        return $this;
    }

    /**
     * Gets as requestDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestDetailsType
     */
    public function getRequestDetails()
    {
        return $this->requestDetails;
    }

    /**
     * Sets a new requestDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestDetailsType $requestDetails
     * @return self
     */
    public function setRequestDetails(?\Conecto\FeratelDsi\Dtos\RequestDetailsType $requestDetails = null)
    {
        $this->requestDetails = $requestDetails;
        return $this;
    }

    /**
     * Gets as searchLines
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchLinesType
     */
    public function getSearchLines()
    {
        return $this->searchLines;
    }

    /**
     * Sets a new searchLines
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchLinesType $searchLines
     * @return self
     */
    public function setSearchLines(?\Conecto\FeratelDsi\Dtos\SearchLinesType $searchLines = null)
    {
        $this->searchLines = $searchLines;
        return $this;
    }

    /**
     * Gets as additionalServicesSearch
     *
     * @return \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchType
     */
    public function getAdditionalServicesSearch()
    {
        return $this->additionalServicesSearch;
    }

    /**
     * Sets a new additionalServicesSearch
     *
     * @param \Conecto\FeratelDsi\Dtos\AdditionalServicesSearchType $additionalServicesSearch
     * @return self
     */
    public function setAdditionalServicesSearch(?\Conecto\FeratelDsi\Dtos\AdditionalServicesSearchType $additionalServicesSearch = null)
    {
        $this->additionalServicesSearch = $additionalServicesSearch;
        return $this;
    }

    /**
     * Gets as packagesSearch
     *
     * @return \Conecto\FeratelDsi\Dtos\PackagesSearchType
     */
    public function getPackagesSearch()
    {
        return $this->packagesSearch;
    }

    /**
     * Sets a new packagesSearch
     *
     * @param \Conecto\FeratelDsi\Dtos\PackagesSearchType $packagesSearch
     * @return self
     */
    public function setPackagesSearch(?\Conecto\FeratelDsi\Dtos\PackagesSearchType $packagesSearch = null)
    {
        $this->packagesSearch = $packagesSearch;
        return $this;
    }

    /**
     * Gets as packageDetailsSearch
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsSearchType
     */
    public function getPackageDetailsSearch()
    {
        return $this->packageDetailsSearch;
    }

    /**
     * Sets a new packageDetailsSearch
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsSearchType $packageDetailsSearch
     * @return self
     */
    public function setPackageDetailsSearch(?\Conecto\FeratelDsi\Dtos\PackageDetailsSearchType $packageDetailsSearch = null)
    {
        $this->packageDetailsSearch = $packageDetailsSearch;
        return $this;
    }

    /**
     * Gets as packageCalculationSearch
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType
     */
    public function getPackageCalculationSearch()
    {
        return $this->packageCalculationSearch;
    }

    /**
     * Sets a new packageCalculationSearch
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType $packageCalculationSearch
     * @return self
     */
    public function setPackageCalculationSearch(?\Conecto\FeratelDsi\Dtos\PackageCalculationSearchType $packageCalculationSearch = null)
    {
        $this->packageCalculationSearch = $packageCalculationSearch;
        return $this;
    }

    /**
     * Gets as basicData
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicDataType
     */
    public function getBasicData()
    {
        return $this->basicData;
    }

    /**
     * Sets a new basicData
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicDataType $basicData
     * @return self
     */
    public function setBasicData(?\Conecto\FeratelDsi\Dtos\BasicDataType $basicData = null)
    {
        $this->basicData = $basicData;
        return $this;
    }

    /**
     * Gets as oNAXBasicDataRequest
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXBasicDataRequestType
     */
    public function getONAXBasicDataRequest()
    {
        return $this->oNAXBasicDataRequest;
    }

    /**
     * Sets a new oNAXBasicDataRequest
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXBasicDataRequestType $oNAXBasicDataRequest
     * @return self
     */
    public function setONAXBasicDataRequest(?\Conecto\FeratelDsi\Dtos\ONAXBasicDataRequestType $oNAXBasicDataRequest = null)
    {
        $this->oNAXBasicDataRequest = $oNAXBasicDataRequest;
        return $this;
    }

    /**
     * Gets as keyValues
     *
     * @return \Conecto\FeratelDsi\Dtos\KeyValuesType
     */
    public function getKeyValues()
    {
        return $this->keyValues;
    }

    /**
     * Sets a new keyValues
     *
     * @param \Conecto\FeratelDsi\Dtos\KeyValuesType $keyValues
     * @return self
     */
    public function setKeyValues(?\Conecto\FeratelDsi\Dtos\KeyValuesType $keyValues = null)
    {
        $this->keyValues = $keyValues;
        return $this;
    }

    /**
     * Gets as importData
     *
     * @return \Conecto\FeratelDsi\Dtos\ImportDataType
     */
    public function getImportData()
    {
        return $this->importData;
    }

    /**
     * Sets a new importData
     *
     * @param \Conecto\FeratelDsi\Dtos\ImportDataType $importData
     * @return self
     */
    public function setImportData(?\Conecto\FeratelDsi\Dtos\ImportDataType $importData = null)
    {
        $this->importData = $importData;
        return $this;
    }

    /**
     * Gets as eventSearch
     *
     * @return \Conecto\FeratelDsi\Dtos\EventSearchType
     */
    public function getEventSearch()
    {
        return $this->eventSearch;
    }

    /**
     * Sets a new eventSearch
     *
     * @param \Conecto\FeratelDsi\Dtos\EventSearchType $eventSearch
     * @return self
     */
    public function setEventSearch(?\Conecto\FeratelDsi\Dtos\EventSearchType $eventSearch = null)
    {
        $this->eventSearch = $eventSearch;
        return $this;
    }

    /**
     * Gets as guestInsert
     *
     * @return \Conecto\FeratelDsi\Dtos\GuestNewType
     */
    public function getGuestInsert()
    {
        return $this->guestInsert;
    }

    /**
     * Sets a new guestInsert
     *
     * @param \Conecto\FeratelDsi\Dtos\GuestNewType $guestInsert
     * @return self
     */
    public function setGuestInsert(?\Conecto\FeratelDsi\Dtos\GuestNewType $guestInsert = null)
    {
        $this->guestInsert = $guestInsert;
        return $this;
    }

    /**
     * Gets as guestUpdate
     *
     * @return \Conecto\FeratelDsi\Dtos\GuestFullType
     */
    public function getGuestUpdate()
    {
        return $this->guestUpdate;
    }

    /**
     * Sets a new guestUpdate
     *
     * @param \Conecto\FeratelDsi\Dtos\GuestFullType $guestUpdate
     * @return self
     */
    public function setGuestUpdate(?\Conecto\FeratelDsi\Dtos\GuestFullType $guestUpdate = null)
    {
        $this->guestUpdate = $guestUpdate;
        return $this;
    }

    /**
     * Gets as guestDelete
     *
     * @return \Conecto\FeratelDsi\Dtos\GuestBasicType
     */
    public function getGuestDelete()
    {
        return $this->guestDelete;
    }

    /**
     * Sets a new guestDelete
     *
     * @param \Conecto\FeratelDsi\Dtos\GuestBasicType $guestDelete
     * @return self
     */
    public function setGuestDelete(?\Conecto\FeratelDsi\Dtos\GuestBasicType $guestDelete = null)
    {
        $this->guestDelete = $guestDelete;
        return $this;
    }

    /**
     * Gets as guest
     *
     * @return \Conecto\FeratelDsi\Dtos\GuestBasicType
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * @param \Conecto\FeratelDsi\Dtos\GuestBasicType $guest
     * @return self
     */
    public function setGuest(?\Conecto\FeratelDsi\Dtos\GuestBasicType $guest = null)
    {
        $this->guest = $guest;
        return $this;
    }

    /**
     * Gets as showShoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\ShowShoppingCartType
     */
    public function getShowShoppingCart()
    {
        return $this->showShoppingCart;
    }

    /**
     * Sets a new showShoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\ShowShoppingCartType $showShoppingCart
     * @return self
     */
    public function setShowShoppingCart(?\Conecto\FeratelDsi\Dtos\ShowShoppingCartType $showShoppingCart = null)
    {
        $this->showShoppingCart = $showShoppingCart;
        return $this;
    }

    /**
     * Gets as createShoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\CreateShoppingCartType
     */
    public function getCreateShoppingCart()
    {
        return $this->createShoppingCart;
    }

    /**
     * Sets a new createShoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\CreateShoppingCartType $createShoppingCart
     * @return self
     */
    public function setCreateShoppingCart(?\Conecto\FeratelDsi\Dtos\CreateShoppingCartType $createShoppingCart = null)
    {
        $this->createShoppingCart = $createShoppingCart;
        return $this;
    }

    /**
     * Gets as addToShoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\AddToShoppingCartType
     */
    public function getAddToShoppingCart()
    {
        return $this->addToShoppingCart;
    }

    /**
     * Sets a new addToShoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\AddToShoppingCartType $addToShoppingCart
     * @return self
     */
    public function setAddToShoppingCart(?\Conecto\FeratelDsi\Dtos\AddToShoppingCartType $addToShoppingCart = null)
    {
        $this->addToShoppingCart = $addToShoppingCart;
        return $this;
    }

    /**
     * Gets as deleteFromShoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\DeleteFromShoppingCartType
     */
    public function getDeleteFromShoppingCart()
    {
        return $this->deleteFromShoppingCart;
    }

    /**
     * Sets a new deleteFromShoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\DeleteFromShoppingCartType $deleteFromShoppingCart
     * @return self
     */
    public function setDeleteFromShoppingCart(?\Conecto\FeratelDsi\Dtos\DeleteFromShoppingCartType $deleteFromShoppingCart = null)
    {
        $this->deleteFromShoppingCart = $deleteFromShoppingCart;
        return $this;
    }

    /**
     * Gets as setOptionalGuaranteeToShoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeToShoppingCartType
     */
    public function getSetOptionalGuaranteeToShoppingCart()
    {
        return $this->setOptionalGuaranteeToShoppingCart;
    }

    /**
     * Sets a new setOptionalGuaranteeToShoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeToShoppingCartType $setOptionalGuaranteeToShoppingCart
     * @return self
     */
    public function setSetOptionalGuaranteeToShoppingCart(?\Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeToShoppingCartType $setOptionalGuaranteeToShoppingCart = null)
    {
        $this->setOptionalGuaranteeToShoppingCart = $setOptionalGuaranteeToShoppingCart;
        return $this;
    }

    /**
     * Gets as updateShoppingCartPaymentMethod
     *
     * @return \Conecto\FeratelDsi\Dtos\UpdateShoppingCartPaymentMethodType
     */
    public function getUpdateShoppingCartPaymentMethod()
    {
        return $this->updateShoppingCartPaymentMethod;
    }

    /**
     * Sets a new updateShoppingCartPaymentMethod
     *
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartPaymentMethodType $updateShoppingCartPaymentMethod
     * @return self
     */
    public function setUpdateShoppingCartPaymentMethod(?\Conecto\FeratelDsi\Dtos\UpdateShoppingCartPaymentMethodType $updateShoppingCartPaymentMethod = null)
    {
        $this->updateShoppingCartPaymentMethod = $updateShoppingCartPaymentMethod;
        return $this;
    }

    /**
     * Gets as updateShoppingCartSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\UpdateShoppingCartSettingsType
     */
    public function getUpdateShoppingCartSettings()
    {
        return $this->updateShoppingCartSettings;
    }

    /**
     * Sets a new updateShoppingCartSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartSettingsType $updateShoppingCartSettings
     * @return self
     */
    public function setUpdateShoppingCartSettings(?\Conecto\FeratelDsi\Dtos\UpdateShoppingCartSettingsType $updateShoppingCartSettings = null)
    {
        $this->updateShoppingCartSettings = $updateShoppingCartSettings;
        return $this;
    }

    /**
     * Gets as updateShoppingCartExternal
     *
     * @return \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType
     */
    public function getUpdateShoppingCartExternal()
    {
        return $this->updateShoppingCartExternal;
    }

    /**
     * Sets a new updateShoppingCartExternal
     *
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType $updateShoppingCartExternal
     * @return self
     */
    public function setUpdateShoppingCartExternal(?\Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType $updateShoppingCartExternal = null)
    {
        $this->updateShoppingCartExternal = $updateShoppingCartExternal;
        return $this;
    }

    /**
     * Gets as commitShoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\CommitShoppingCartType
     */
    public function getCommitShoppingCart()
    {
        return $this->commitShoppingCart;
    }

    /**
     * Sets a new commitShoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\CommitShoppingCartType $commitShoppingCart
     * @return self
     */
    public function setCommitShoppingCart(?\Conecto\FeratelDsi\Dtos\CommitShoppingCartType $commitShoppingCart = null)
    {
        $this->commitShoppingCart = $commitShoppingCart;
        return $this;
    }

    /**
     * Gets as electronicPaymentCheckOut
     *
     * @return \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRQType
     */
    public function getElectronicPaymentCheckOut()
    {
        return $this->electronicPaymentCheckOut;
    }

    /**
     * Sets a new electronicPaymentCheckOut
     *
     * @param \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRQType $electronicPaymentCheckOut
     * @return self
     */
    public function setElectronicPaymentCheckOut(?\Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRQType $electronicPaymentCheckOut = null)
    {
        $this->electronicPaymentCheckOut = $electronicPaymentCheckOut;
        return $this;
    }

    /**
     * Gets as showBooking
     *
     * @return \Conecto\FeratelDsi\Dtos\ShowBookingType
     */
    public function getShowBooking()
    {
        return $this->showBooking;
    }

    /**
     * Sets a new showBooking
     *
     * @param \Conecto\FeratelDsi\Dtos\ShowBookingType $showBooking
     * @return self
     */
    public function setShowBooking(?\Conecto\FeratelDsi\Dtos\ShowBookingType $showBooking = null)
    {
        $this->showBooking = $showBooking;
        return $this;
    }

    /**
     * Gets as checkShoppingCartStatus
     *
     * @return \Conecto\FeratelDsi\Dtos\CheckShoppingCartStatusType
     */
    public function getCheckShoppingCartStatus()
    {
        return $this->checkShoppingCartStatus;
    }

    /**
     * Sets a new checkShoppingCartStatus
     *
     * @param \Conecto\FeratelDsi\Dtos\CheckShoppingCartStatusType $checkShoppingCartStatus
     * @return self
     */
    public function setCheckShoppingCartStatus(?\Conecto\FeratelDsi\Dtos\CheckShoppingCartStatusType $checkShoppingCartStatus = null)
    {
        $this->checkShoppingCartStatus = $checkShoppingCartStatus;
        return $this;
    }

    /**
     * Gets as readTransactions
     *
     * @return \Conecto\FeratelDsi\Dtos\ReadTransactionsType
     */
    public function getReadTransactions()
    {
        return $this->readTransactions;
    }

    /**
     * Sets a new readTransactions
     *
     * @param \Conecto\FeratelDsi\Dtos\ReadTransactionsType $readTransactions
     * @return self
     */
    public function setReadTransactions(?\Conecto\FeratelDsi\Dtos\ReadTransactionsType $readTransactions = null)
    {
        $this->readTransactions = $readTransactions;
        return $this;
    }

    /**
     * Gets as cancelBooking
     *
     * @return \Conecto\FeratelDsi\Dtos\CancelBookingType
     */
    public function getCancelBooking()
    {
        return $this->cancelBooking;
    }

    /**
     * Sets a new cancelBooking
     *
     * @param \Conecto\FeratelDsi\Dtos\CancelBookingType $cancelBooking
     * @return self
     */
    public function setCancelBooking(?\Conecto\FeratelDsi\Dtos\CancelBookingType $cancelBooking = null)
    {
        $this->cancelBooking = $cancelBooking;
        return $this;
    }

    /**
     * Gets as getOrganisationInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\GetOrganisationInformationType
     */
    public function getGetOrganisationInformation()
    {
        return $this->getOrganisationInformation;
    }

    /**
     * Sets a new getOrganisationInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\GetOrganisationInformationType $getOrganisationInformation
     * @return self
     */
    public function setGetOrganisationInformation(?\Conecto\FeratelDsi\Dtos\GetOrganisationInformationType $getOrganisationInformation = null)
    {
        $this->getOrganisationInformation = $getOrganisationInformation;
        return $this;
    }

    /**
     * Gets as calculateOptionalFeesForShoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\CalculateOptionalFeesForShoppingCartType
     */
    public function getCalculateOptionalFeesForShoppingCart()
    {
        return $this->calculateOptionalFeesForShoppingCart;
    }

    /**
     * Sets a new calculateOptionalFeesForShoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\CalculateOptionalFeesForShoppingCartType $calculateOptionalFeesForShoppingCart
     * @return self
     */
    public function setCalculateOptionalFeesForShoppingCart(?\Conecto\FeratelDsi\Dtos\CalculateOptionalFeesForShoppingCartType $calculateOptionalFeesForShoppingCart = null)
    {
        $this->calculateOptionalFeesForShoppingCart = $calculateOptionalFeesForShoppingCart;
        return $this;
    }

    /**
     * Gets as pushTransaction
     *
     * @return \Conecto\FeratelDsi\Dtos\PushTransactionType
     */
    public function getPushTransaction()
    {
        return $this->pushTransaction;
    }

    /**
     * Sets a new pushTransaction
     *
     * @param \Conecto\FeratelDsi\Dtos\PushTransactionType $pushTransaction
     * @return self
     */
    public function setPushTransaction(?\Conecto\FeratelDsi\Dtos\PushTransactionType $pushTransaction = null)
    {
        $this->pushTransaction = $pushTransaction;
        return $this;
    }

    /**
     * Gets as getResult
     *
     * @return \Conecto\FeratelDsi\Dtos\GetResultType
     */
    public function getGetResult()
    {
        return $this->getResult;
    }

    /**
     * Sets a new getResult
     *
     * @param \Conecto\FeratelDsi\Dtos\GetResultType $getResult
     * @return self
     */
    public function setGetResult(?\Conecto\FeratelDsi\Dtos\GetResultType $getResult = null)
    {
        $this->getResult = $getResult;
        return $this;
    }

    /**
     * Gets as getCEData
     *
     * @return \Conecto\FeratelDsi\Dtos\GetCEDataType
     */
    public function getGetCEData()
    {
        return $this->getCEData;
    }

    /**
     * Sets a new getCEData
     *
     * @param \Conecto\FeratelDsi\Dtos\GetCEDataType $getCEData
     * @return self
     */
    public function setGetCEData(?\Conecto\FeratelDsi\Dtos\GetCEDataType $getCEData = null)
    {
        $this->getCEData = $getCEData;
        return $this;
    }

    /**
     * Gets as countClick
     *
     * @return \Conecto\FeratelDsi\Dtos\CountClickType
     */
    public function getCountClick()
    {
        return $this->countClick;
    }

    /**
     * Sets a new countClick
     *
     * @param \Conecto\FeratelDsi\Dtos\CountClickType $countClick
     * @return self
     */
    public function setCountClick(?\Conecto\FeratelDsi\Dtos\CountClickType $countClick = null)
    {
        $this->countClick = $countClick;
        return $this;
    }

    /**
     * Adds as language
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LanguageType $language
     */
    public function addToLanguages(\Conecto\FeratelDsi\Dtos\LanguageType $language)
    {
        $this->languages[] = $language;
        return $this;
    }

    /**
     * isset languages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguages($index)
    {
        return isset($this->languages[$index]);
    }

    /**
     * unset languages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguages($index)
    {
        unset($this->languages[$index]);
    }

    /**
     * Gets as languages
     *
     * @return \Conecto\FeratelDsi\Dtos\LanguageType[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets a new languages
     *
     * @param \Conecto\FeratelDsi\Dtos\LanguageType[] $languages
     * @return self
     */
    public function setLanguages(array $languages = null)
    {
        $this->languages = $languages;
        return $this;
    }

    /**
     * Gets as getKeyValues
     *
     * @return \Conecto\FeratelDsi\Dtos\NLGetKeyValuesType
     */
    public function getGetKeyValues()
    {
        return $this->getKeyValues;
    }

    /**
     * Sets a new getKeyValues
     *
     * @param \Conecto\FeratelDsi\Dtos\NLGetKeyValuesType $getKeyValues
     * @return self
     */
    public function setGetKeyValues(?\Conecto\FeratelDsi\Dtos\NLGetKeyValuesType $getKeyValues = null)
    {
        $this->getKeyValues = $getKeyValues;
        return $this;
    }

    /**
     * Adds as language
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LanguageType $language
     */
    public function addToTranslations(\Conecto\FeratelDsi\Dtos\LanguageType $language)
    {
        $this->translations[] = $language;
        return $this;
    }

    /**
     * isset translations
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTranslations($index)
    {
        return isset($this->translations[$index]);
    }

    /**
     * unset translations
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTranslations($index)
    {
        unset($this->translations[$index]);
    }

    /**
     * Gets as translations
     *
     * @return \Conecto\FeratelDsi\Dtos\LanguageType[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Sets a new translations
     *
     * @param \Conecto\FeratelDsi\Dtos\LanguageType[] $translations
     * @return self
     */
    public function setTranslations(array $translations = null)
    {
        $this->translations = $translations;
        return $this;
    }

    /**
     * Gets as getAddresses
     *
     * @return \Conecto\FeratelDsi\Dtos\NLGetAddressesType
     */
    public function getGetAddresses()
    {
        return $this->getAddresses;
    }

    /**
     * Sets a new getAddresses
     *
     * @param \Conecto\FeratelDsi\Dtos\NLGetAddressesType $getAddresses
     * @return self
     */
    public function setGetAddresses(?\Conecto\FeratelDsi\Dtos\NLGetAddressesType $getAddresses = null)
    {
        $this->getAddresses = $getAddresses;
        return $this;
    }

    /**
     * Gets as getDeletedAddresses
     *
     * @return \Conecto\FeratelDsi\Dtos\NLGetAddressesType
     */
    public function getGetDeletedAddresses()
    {
        return $this->getDeletedAddresses;
    }

    /**
     * Sets a new getDeletedAddresses
     *
     * @param \Conecto\FeratelDsi\Dtos\NLGetAddressesType $getDeletedAddresses
     * @return self
     */
    public function setGetDeletedAddresses(?\Conecto\FeratelDsi\Dtos\NLGetAddressesType $getDeletedAddresses = null)
    {
        $this->getDeletedAddresses = $getDeletedAddresses;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLInsertAddressType $address
     */
    public function addToInsertAddresses(\Conecto\FeratelDsi\Dtos\NLInsertAddressType $address)
    {
        $this->insertAddresses[] = $address;
        return $this;
    }

    /**
     * isset insertAddresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsertAddresses($index)
    {
        return isset($this->insertAddresses[$index]);
    }

    /**
     * unset insertAddresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsertAddresses($index)
    {
        unset($this->insertAddresses[$index]);
    }

    /**
     * Gets as insertAddresses
     *
     * @return \Conecto\FeratelDsi\Dtos\NLInsertAddressType[]
     */
    public function getInsertAddresses()
    {
        return $this->insertAddresses;
    }

    /**
     * Sets a new insertAddresses
     *
     * @param \Conecto\FeratelDsi\Dtos\NLInsertAddressType[] $insertAddresses
     * @return self
     */
    public function setInsertAddresses(array $insertAddresses = null)
    {
        $this->insertAddresses = $insertAddresses;
        return $this;
    }

    /**
     * Gets as updateAddress
     *
     * @return \Conecto\FeratelDsi\Dtos\NLUpdateAddressType
     */
    public function getUpdateAddress()
    {
        return $this->updateAddress;
    }

    /**
     * Sets a new updateAddress
     *
     * @param \Conecto\FeratelDsi\Dtos\NLUpdateAddressType $updateAddress
     * @return self
     */
    public function setUpdateAddress(?\Conecto\FeratelDsi\Dtos\NLUpdateAddressType $updateAddress = null)
    {
        $this->updateAddress = $updateAddress;
        return $this;
    }

    /**
     * Adds as newsletterSend
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSendType $newsletterSend
     */
    public function addToNewslettersSend(\Conecto\FeratelDsi\Dtos\NLNewsletterSendType $newsletterSend)
    {
        $this->newslettersSend[] = $newsletterSend;
        return $this;
    }

    /**
     * isset newslettersSend
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewslettersSend($index)
    {
        return isset($this->newslettersSend[$index]);
    }

    /**
     * unset newslettersSend
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewslettersSend($index)
    {
        unset($this->newslettersSend[$index]);
    }

    /**
     * Gets as newslettersSend
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewsletterSendType[]
     */
    public function getNewslettersSend()
    {
        return $this->newslettersSend;
    }

    /**
     * Sets a new newslettersSend
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSendType[] $newslettersSend
     * @return self
     */
    public function setNewslettersSend(array $newslettersSend = null)
    {
        $this->newslettersSend = $newslettersSend;
        return $this;
    }

    /**
     * Adds as newsletterSubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType $newsletterSubscribe
     */
    public function addToNewslettersSubscriptions(\Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType $newsletterSubscribe)
    {
        $this->newslettersSubscriptions[] = $newsletterSubscribe;
        return $this;
    }

    /**
     * isset newslettersSubscriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewslettersSubscriptions($index)
    {
        return isset($this->newslettersSubscriptions[$index]);
    }

    /**
     * unset newslettersSubscriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewslettersSubscriptions($index)
    {
        unset($this->newslettersSubscriptions[$index]);
    }

    /**
     * Gets as newslettersSubscriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType[]
     */
    public function getNewslettersSubscriptions()
    {
        return $this->newslettersSubscriptions;
    }

    /**
     * Sets a new newslettersSubscriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSubscribeType[] $newslettersSubscriptions
     * @return self
     */
    public function setNewslettersSubscriptions(array $newslettersSubscriptions = null)
    {
        $this->newslettersSubscriptions = $newslettersSubscriptions;
        return $this;
    }

    /**
     * Adds as newsletterUnsubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType $newsletterUnsubscribe
     */
    public function addToNewslettersUnsubscriptions(\Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType $newsletterUnsubscribe)
    {
        $this->newslettersUnsubscriptions[] = $newsletterUnsubscribe;
        return $this;
    }

    /**
     * isset newslettersUnsubscriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewslettersUnsubscriptions($index)
    {
        return isset($this->newslettersUnsubscriptions[$index]);
    }

    /**
     * unset newslettersUnsubscriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewslettersUnsubscriptions($index)
    {
        unset($this->newslettersUnsubscriptions[$index]);
    }

    /**
     * Gets as newslettersUnsubscriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType[]
     */
    public function getNewslettersUnsubscriptions()
    {
        return $this->newslettersUnsubscriptions;
    }

    /**
     * Sets a new newslettersUnsubscriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterUnsubscribeType[] $newslettersUnsubscriptions
     * @return self
     */
    public function setNewslettersUnsubscriptions(array $newslettersUnsubscriptions = null)
    {
        $this->newslettersUnsubscriptions = $newslettersUnsubscriptions;
        return $this;
    }

    /**
     * Adds as consentSubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentSubscribe
     */
    public function addToConsentsSubscriptions(\Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentSubscribe)
    {
        $this->consentsSubscriptions[] = $consentSubscribe;
        return $this;
    }

    /**
     * isset consentsSubscriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentsSubscriptions($index)
    {
        return isset($this->consentsSubscriptions[$index]);
    }

    /**
     * unset consentsSubscriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentsSubscriptions($index)
    {
        unset($this->consentsSubscriptions[$index]);
    }

    /**
     * Gets as consentsSubscriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[]
     */
    public function getConsentsSubscriptions()
    {
        return $this->consentsSubscriptions;
    }

    /**
     * Sets a new consentsSubscriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentsSubscriptions
     * @return self
     */
    public function setConsentsSubscriptions(array $consentsSubscriptions = null)
    {
        $this->consentsSubscriptions = $consentsSubscriptions;
        return $this;
    }

    /**
     * Adds as consentUnsubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentUnsubscribe
     */
    public function addToConsentsUnsubscriptions(\Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType $consentUnsubscribe)
    {
        $this->consentsUnsubscriptions[] = $consentUnsubscribe;
        return $this;
    }

    /**
     * isset consentsUnsubscriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentsUnsubscriptions($index)
    {
        return isset($this->consentsUnsubscriptions[$index]);
    }

    /**
     * unset consentsUnsubscriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentsUnsubscriptions($index)
    {
        unset($this->consentsUnsubscriptions[$index]);
    }

    /**
     * Gets as consentsUnsubscriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[]
     */
    public function getConsentsUnsubscriptions()
    {
        return $this->consentsUnsubscriptions;
    }

    /**
     * Sets a new consentsUnsubscriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\AddressAndConsentTypeListType[] $consentsUnsubscriptions
     * @return self
     */
    public function setConsentsUnsubscriptions(array $consentsUnsubscriptions = null)
    {
        $this->consentsUnsubscriptions = $consentsUnsubscriptions;
        return $this;
    }

    /**
     * Gets as getAvailabilities
     *
     * @return \Conecto\FeratelDsi\Dtos\GetAvailabilitiesType
     */
    public function getGetAvailabilities()
    {
        return $this->getAvailabilities;
    }

    /**
     * Sets a new getAvailabilities
     *
     * @param \Conecto\FeratelDsi\Dtos\GetAvailabilitiesType $getAvailabilities
     * @return self
     */
    public function setGetAvailabilities(?\Conecto\FeratelDsi\Dtos\GetAvailabilitiesType $getAvailabilities = null)
    {
        $this->getAvailabilities = $getAvailabilities;
        return $this;
    }

    /**
     * Gets as insertWebLink
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInsertWebLinkType
     */
    public function getInsertWebLink()
    {
        return $this->insertWebLink;
    }

    /**
     * Sets a new insertWebLink
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInsertWebLinkType $insertWebLink
     * @return self
     */
    public function setInsertWebLink(?\Conecto\FeratelDsi\Dtos\BDInsertWebLinkType $insertWebLink = null)
    {
        $this->insertWebLink = $insertWebLink;
        return $this;
    }

    /**
     * Gets as getCancellationInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\GetCancellationInformationAType
     */
    public function getGetCancellationInformation()
    {
        return $this->getCancellationInformation;
    }

    /**
     * Sets a new getCancellationInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\GetCancellationInformationAType $getCancellationInformation
     * @return self
     */
    public function setGetCancellationInformation(?\Conecto\FeratelDsi\Dtos\RequestType\GetCancellationInformationAType $getCancellationInformation = null)
    {
        $this->getCancellationInformation = $getCancellationInformation;
        return $this;
    }

    /**
     * Gets as getPaymentInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\GetPaymentInformationAType
     */
    public function getGetPaymentInformation()
    {
        return $this->getPaymentInformation;
    }

    /**
     * Sets a new getPaymentInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\GetPaymentInformationAType $getPaymentInformation
     * @return self
     */
    public function setGetPaymentInformation(?\Conecto\FeratelDsi\Dtos\RequestType\GetPaymentInformationAType $getPaymentInformation = null)
    {
        $this->getPaymentInformation = $getPaymentInformation;
        return $this;
    }

    /**
     * Adds as infrastructureItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType $infrastructureItem
     */
    public function addToImportInfrastructureItems(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType $infrastructureItem)
    {
        $this->importInfrastructureItems[] = $infrastructureItem;
        return $this;
    }

    /**
     * isset importInfrastructureItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImportInfrastructureItems($index)
    {
        return isset($this->importInfrastructureItems[$index]);
    }

    /**
     * unset importInfrastructureItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImportInfrastructureItems($index)
    {
        unset($this->importInfrastructureItems[$index]);
    }

    /**
     * Gets as importInfrastructureItems
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType[]
     */
    public function getImportInfrastructureItems()
    {
        return $this->importInfrastructureItems;
    }

    /**
     * Sets a new importInfrastructureItems
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType[] $importInfrastructureItems
     * @return self
     */
    public function setImportInfrastructureItems(array $importInfrastructureItems = null)
    {
        $this->importInfrastructureItems = $importInfrastructureItems;
        return $this;
    }

    /**
     * Adds as event
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType $event
     */
    public function addToImportEvents(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType $event)
    {
        $this->importEvents[] = $event;
        return $this;
    }

    /**
     * isset importEvents
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImportEvents($index)
    {
        return isset($this->importEvents[$index]);
    }

    /**
     * unset importEvents
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImportEvents($index)
    {
        unset($this->importEvents[$index]);
    }

    /**
     * Gets as importEvents
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType[]
     */
    public function getImportEvents()
    {
        return $this->importEvents;
    }

    /**
     * Sets a new importEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType[] $importEvents
     * @return self
     */
    public function setImportEvents(array $importEvents = null)
    {
        $this->importEvents = $importEvents;
        return $this;
    }

    /**
     * Gets as getStandardInformationForm
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\GetStandardInformationFormAType
     */
    public function getGetStandardInformationForm()
    {
        return $this->getStandardInformationForm;
    }

    /**
     * Sets a new getStandardInformationForm
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\GetStandardInformationFormAType $getStandardInformationForm
     * @return self
     */
    public function setGetStandardInformationForm(?\Conecto\FeratelDsi\Dtos\RequestType\GetStandardInformationFormAType $getStandardInformationForm = null)
    {
        $this->getStandardInformationForm = $getStandardInformationForm;
        return $this;
    }
}

