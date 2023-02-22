<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ResponseType
 *
 *
 * XSD Type: ResponseType
 */
class ResponseType
{
    /**
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @var int $index
     */
    private $index = null;

    /**
     * @var int $totalObjects
     */
    private $totalObjects = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderType[] $serviceProvider
     */
    private $serviceProvider = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType[] $serviceProviderData
     */
    private $serviceProviderData = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderItemType[] $serviceProviders
     */
    private $serviceProviders = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXBasicDataType $oNAXBasicData
     */
    private $oNAXBasicData = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType[] $changedServiceProviders
     */
    private $changedServiceProviders = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDShopItemItemType[] $shopItems
     */
    private $shopItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventItemType[] $events
     */
    private $events = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedEventListType\EventAType[] $changedEvents
     */
    private $changedEvents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureItemType[] $infrastructure
     */
    private $infrastructure = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType[] $changedInfrastructures
     */
    private $changedInfrastructures = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageItemType[] $packages
     */
    private $packages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageContainerItemType[] $packageContainers
     */
    private $packageContainers = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDeletedItemListType[] $deletedItems
     */
    private $deletedItems = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\KeyValuesRSType $keyValues
     */
    private $keyValues = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType $shoppingCart
     */
    private $shoppingCart = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartStatusType $shoppingCartStatus
     */
    private $shoppingCartStatus = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuestFullInfoType $guest
     */
    private $guest = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingType $booking
     */
    private $booking = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TransactionType[] $transactions
     */
    private $transactions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CanceledBookingType $canceledBooking
     */
    private $canceledBooking = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DBNumberItemType[] $requests
     */
    private $requests = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\OrganisationInformationResultType $organisationInformation
     */
    private $organisationInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CheckEffectResultType $checkEffectData
     */
    private $checkEffectData = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CheckEffectUserType[] $checkEffectUsers
     */
    private $checkEffectUsers = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ImportBasicDataServieProviderType[] $importedServiceProviders
     */
    private $importedServiceProviders = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageResultType[] $package
     */
    private $package = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType $packageDetails
     */
    private $packageDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType $packageCalculation
     */
    private $packageCalculation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CalendarType[] $calendarDates
     */
    private $calendarDates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CalculatedOptionalFeesType $calculatedOptionalFees
     */
    private $calculatedOptionalFees = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLKeyValueDataType $keyValueData
     */
    private $keyValueData = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLAddressType[] $addresses
     */
    private $addresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLInsertedAddressType[] $insertedAddresses
     */
    private $insertedAddresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLUpdatedAddressType $updatedAddress
     */
    private $updatedAddress = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLDeletedAddressType[] $deletedAddresses
     */
    private $deletedAddresses = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewsletterSentType[] $newslettersSent
     */
    private $newslettersSent = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType[] $newslettersSubscribed
     */
    private $newslettersSubscribed = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLNewslettersUnsubscribedType[] $newslettersUnsubscribed
     */
    private $newslettersUnsubscribed = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType[] $consentsSubscribed
     */
    private $consentsSubscribed = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType[] $consentsUnsubscribed
     */
    private $consentsUnsubscribed = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AvailabilityCalendarListType[] $availabilityCalendar
     */
    private $availabilityCalendar = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\ResponseType\CancellationInformationAType[] $cancellationInformation
     */
    private $cancellationInformation = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation
     */
    private $paymentInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType[] $importEvents
     */
    private $importEvents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType[] $standardInformationForms
     */
    private $standardInformationForms = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRSType $electronicPaymentCheckOut
     */
    private $electronicPaymentCheckOut = null;

    public function __construct(int $index = null, int $totalObjects = null, string $currencyCode = null, array $serviceProvider = null, array $serviceProviderData = null, array $serviceProviders = null, \Conecto\FeratelDsi\Dtos\ONAXBasicDataType $oNAXBasicData = null, array $changedServiceProviders = null, array $shopItems = null, array $events = null, array $changedEvents = null, array $infrastructure = null, array $changedInfrastructures = null, array $packages = null, array $packageContainers = null, array $deletedItems = null, \Conecto\FeratelDsi\Dtos\KeyValuesRSType $keyValues = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType $shoppingCart = null, \Conecto\FeratelDsi\Dtos\ShoppingCartStatusType $shoppingCartStatus = null, \Conecto\FeratelDsi\Dtos\GuestFullInfoType $guest = null, \Conecto\FeratelDsi\Dtos\BookingType $booking = null, array $transactions = null, \Conecto\FeratelDsi\Dtos\CanceledBookingType $canceledBooking = null, array $requests = null, \Conecto\FeratelDsi\Dtos\OrganisationInformationResultType $organisationInformation = null, \Conecto\FeratelDsi\Dtos\CheckEffectResultType $checkEffectData = null, array $checkEffectUsers = null, array $importedServiceProviders = null, array $package = null, \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType $packageDetails = null, \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType $packageCalculation = null, array $calendarDates = null, \Conecto\FeratelDsi\Dtos\CalculatedOptionalFeesType $calculatedOptionalFees = null, \Conecto\FeratelDsi\Dtos\NLKeyValueDataType $keyValueData = null, array $addresses = null, array $insertedAddresses = null, \Conecto\FeratelDsi\Dtos\NLUpdatedAddressType $updatedAddress = null, array $deletedAddresses = null, array $newslettersSent = null, array $newslettersSubscribed = null, array $newslettersUnsubscribed = null, array $consentsSubscribed = null, array $consentsUnsubscribed = null, array $availabilityCalendar = null, array $cancellationInformation = null, \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation = null, array $importEvents = null, array $standardInformationForms = null, \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRSType $electronicPaymentCheckOut = null)
    {
        $this->index = $index;
        $this->totalObjects = $totalObjects;
        $this->currencyCode = $currencyCode;
        $this->serviceProvider = $serviceProvider;
        $this->serviceProviderData = $serviceProviderData;
        $this->serviceProviders = $serviceProviders;
        $this->oNAXBasicData = $oNAXBasicData;
        $this->changedServiceProviders = $changedServiceProviders;
        $this->shopItems = $shopItems;
        $this->events = $events;
        $this->changedEvents = $changedEvents;
        $this->infrastructure = $infrastructure;
        $this->changedInfrastructures = $changedInfrastructures;
        $this->packages = $packages;
        $this->packageContainers = $packageContainers;
        $this->deletedItems = $deletedItems;
        $this->keyValues = $keyValues;
        $this->shoppingCart = $shoppingCart;
        $this->shoppingCartStatus = $shoppingCartStatus;
        $this->guest = $guest;
        $this->booking = $booking;
        $this->transactions = $transactions;
        $this->canceledBooking = $canceledBooking;
        $this->requests = $requests;
        $this->organisationInformation = $organisationInformation;
        $this->checkEffectData = $checkEffectData;
        $this->checkEffectUsers = $checkEffectUsers;
        $this->importedServiceProviders = $importedServiceProviders;
        $this->package = $package;
        $this->packageDetails = $packageDetails;
        $this->packageCalculation = $packageCalculation;
        $this->calendarDates = $calendarDates;
        $this->calculatedOptionalFees = $calculatedOptionalFees;
        $this->keyValueData = $keyValueData;
        $this->addresses = $addresses;
        $this->insertedAddresses = $insertedAddresses;
        $this->updatedAddress = $updatedAddress;
        $this->deletedAddresses = $deletedAddresses;
        $this->newslettersSent = $newslettersSent;
        $this->newslettersSubscribed = $newslettersSubscribed;
        $this->newslettersUnsubscribed = $newslettersUnsubscribed;
        $this->consentsSubscribed = $consentsSubscribed;
        $this->consentsUnsubscribed = $consentsUnsubscribed;
        $this->availabilityCalendar = $availabilityCalendar;
        $this->cancellationInformation = $cancellationInformation;
        $this->paymentInformation = $paymentInformation;
        $this->importEvents = $importEvents;
        $this->standardInformationForms = $standardInformationForms;
        $this->electronicPaymentCheckOut = $electronicPaymentCheckOut;
    }

    /**
     * Gets as index
     *
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @param int $index
     * @return self
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as totalObjects
     *
     * @return int
     */
    public function getTotalObjects()
    {
        return $this->totalObjects;
    }

    /**
     * Sets a new totalObjects
     *
     * @param int $totalObjects
     * @return self
     */
    public function setTotalObjects($totalObjects)
    {
        $this->totalObjects = $totalObjects;
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
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderType $serviceProvider
     */
    public function addToServiceProvider(\Conecto\FeratelDsi\Dtos\ServiceProviderType $serviceProvider)
    {
        $this->serviceProvider[] = $serviceProvider;
        return $this;
    }

    /**
     * isset serviceProvider
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProvider($index)
    {
        return isset($this->serviceProvider[$index]);
    }

    /**
     * unset serviceProvider
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProvider($index)
    {
        unset($this->serviceProvider[$index]);
    }

    /**
     * Gets as serviceProvider
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderType[]
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderType[] $serviceProvider
     * @return self
     */
    public function setServiceProvider(array $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Adds as serviceProviderData
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType $serviceProviderData
     */
    public function addToServiceProviderData(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType $serviceProviderData)
    {
        $this->serviceProviderData[] = $serviceProviderData;
        return $this;
    }

    /**
     * isset serviceProviderData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviderData($index)
    {
        return isset($this->serviceProviderData[$index]);
    }

    /**
     * unset serviceProviderData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviderData($index)
    {
        unset($this->serviceProviderData[$index]);
    }

    /**
     * Gets as serviceProviderData
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType[]
     */
    public function getServiceProviderData()
    {
        return $this->serviceProviderData;
    }

    /**
     * Sets a new serviceProviderData
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType[] $serviceProviderData
     * @return self
     */
    public function setServiceProviderData(array $serviceProviderData = null)
    {
        $this->serviceProviderData = $serviceProviderData;
        return $this;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderItemType $serviceProvider
     */
    public function addToServiceProviders(\Conecto\FeratelDsi\Dtos\BDServiceProviderItemType $serviceProvider)
    {
        $this->serviceProviders[] = $serviceProvider;
        return $this;
    }

    /**
     * isset serviceProviders
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviders($index)
    {
        return isset($this->serviceProviders[$index]);
    }

    /**
     * unset serviceProviders
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviders($index)
    {
        unset($this->serviceProviders[$index]);
    }

    /**
     * Gets as serviceProviders
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderItemType[]
     */
    public function getServiceProviders()
    {
        return $this->serviceProviders;
    }

    /**
     * Sets a new serviceProviders
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderItemType[] $serviceProviders
     * @return self
     */
    public function setServiceProviders(array $serviceProviders = null)
    {
        $this->serviceProviders = $serviceProviders;
        return $this;
    }

    /**
     * Gets as oNAXBasicData
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXBasicDataType
     */
    public function getONAXBasicData()
    {
        return $this->oNAXBasicData;
    }

    /**
     * Sets a new oNAXBasicData
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXBasicDataType $oNAXBasicData
     * @return self
     */
    public function setONAXBasicData(?\Conecto\FeratelDsi\Dtos\ONAXBasicDataType $oNAXBasicData = null)
    {
        $this->oNAXBasicData = $oNAXBasicData;
        return $this;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType $serviceProvider
     */
    public function addToChangedServiceProviders(\Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType $serviceProvider)
    {
        $this->changedServiceProviders[] = $serviceProvider;
        return $this;
    }

    /**
     * isset changedServiceProviders
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChangedServiceProviders($index)
    {
        return isset($this->changedServiceProviders[$index]);
    }

    /**
     * unset changedServiceProviders
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChangedServiceProviders($index)
    {
        unset($this->changedServiceProviders[$index]);
    }

    /**
     * Gets as changedServiceProviders
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType[]
     */
    public function getChangedServiceProviders()
    {
        return $this->changedServiceProviders;
    }

    /**
     * Sets a new changedServiceProviders
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType[] $changedServiceProviders
     * @return self
     */
    public function setChangedServiceProviders(array $changedServiceProviders = null)
    {
        $this->changedServiceProviders = $changedServiceProviders;
        return $this;
    }

    /**
     * Adds as shopItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDShopItemItemType $shopItem
     */
    public function addToShopItems(\Conecto\FeratelDsi\Dtos\BDShopItemItemType $shopItem)
    {
        $this->shopItems[] = $shopItem;
        return $this;
    }

    /**
     * isset shopItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShopItems($index)
    {
        return isset($this->shopItems[$index]);
    }

    /**
     * unset shopItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShopItems($index)
    {
        unset($this->shopItems[$index]);
    }

    /**
     * Gets as shopItems
     *
     * @return \Conecto\FeratelDsi\Dtos\BDShopItemItemType[]
     */
    public function getShopItems()
    {
        return $this->shopItems;
    }

    /**
     * Sets a new shopItems
     *
     * @param \Conecto\FeratelDsi\Dtos\BDShopItemItemType[] $shopItems
     * @return self
     */
    public function setShopItems(array $shopItems = null)
    {
        $this->shopItems = $shopItems;
        return $this;
    }

    /**
     * Adds as event
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDEventItemType $event
     */
    public function addToEvents(\Conecto\FeratelDsi\Dtos\BDEventItemType $event)
    {
        $this->events[] = $event;
        return $this;
    }

    /**
     * isset events
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvents($index)
    {
        return isset($this->events[$index]);
    }

    /**
     * unset events
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvents($index)
    {
        unset($this->events[$index]);
    }

    /**
     * Gets as events
     *
     * @return \Conecto\FeratelDsi\Dtos\BDEventItemType[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventItemType[] $events
     * @return self
     */
    public function setEvents(array $events = null)
    {
        $this->events = $events;
        return $this;
    }

    /**
     * Adds as event
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDChangedEventListType\EventAType $event
     */
    public function addToChangedEvents(\Conecto\FeratelDsi\Dtos\BDChangedEventListType\EventAType $event)
    {
        $this->changedEvents[] = $event;
        return $this;
    }

    /**
     * isset changedEvents
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChangedEvents($index)
    {
        return isset($this->changedEvents[$index]);
    }

    /**
     * unset changedEvents
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChangedEvents($index)
    {
        unset($this->changedEvents[$index]);
    }

    /**
     * Gets as changedEvents
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedEventListType\EventAType[]
     */
    public function getChangedEvents()
    {
        return $this->changedEvents;
    }

    /**
     * Sets a new changedEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedEventListType\EventAType[] $changedEvents
     * @return self
     */
    public function setChangedEvents(array $changedEvents = null)
    {
        $this->changedEvents = $changedEvents;
        return $this;
    }

    /**
     * Adds as infrastructureItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureItemType $infrastructureItem
     */
    public function addToInfrastructure(\Conecto\FeratelDsi\Dtos\BDInfrastructureItemType $infrastructureItem)
    {
        $this->infrastructure[] = $infrastructureItem;
        return $this;
    }

    /**
     * isset infrastructure
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfrastructure($index)
    {
        return isset($this->infrastructure[$index]);
    }

    /**
     * unset infrastructure
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfrastructure($index)
    {
        unset($this->infrastructure[$index]);
    }

    /**
     * Gets as infrastructure
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureItemType[]
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Sets a new infrastructure
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureItemType[] $infrastructure
     * @return self
     */
    public function setInfrastructure(array $infrastructure = null)
    {
        $this->infrastructure = $infrastructure;
        return $this;
    }

    /**
     * Adds as infrastructure
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType $infrastructure
     */
    public function addToChangedInfrastructures(\Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType $infrastructure)
    {
        $this->changedInfrastructures[] = $infrastructure;
        return $this;
    }

    /**
     * isset changedInfrastructures
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChangedInfrastructures($index)
    {
        return isset($this->changedInfrastructures[$index]);
    }

    /**
     * unset changedInfrastructures
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChangedInfrastructures($index)
    {
        unset($this->changedInfrastructures[$index]);
    }

    /**
     * Gets as changedInfrastructures
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType[]
     */
    public function getChangedInfrastructures()
    {
        return $this->changedInfrastructures;
    }

    /**
     * Sets a new changedInfrastructures
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType[] $changedInfrastructures
     * @return self
     */
    public function setChangedInfrastructures(array $changedInfrastructures = null)
    {
        $this->changedInfrastructures = $changedInfrastructures;
        return $this;
    }

    /**
     * Adds as package
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageItemType $package
     */
    public function addToPackages(\Conecto\FeratelDsi\Dtos\BDPackageItemType $package)
    {
        $this->packages[] = $package;
        return $this;
    }

    /**
     * isset packages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackages($index)
    {
        return isset($this->packages[$index]);
    }

    /**
     * unset packages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackages($index)
    {
        unset($this->packages[$index]);
    }

    /**
     * Gets as packages
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageItemType[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Sets a new packages
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageItemType[] $packages
     * @return self
     */
    public function setPackages(array $packages = null)
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * Adds as package
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageContainerItemType $package
     */
    public function addToPackageContainers(\Conecto\FeratelDsi\Dtos\BDPackageContainerItemType $package)
    {
        $this->packageContainers[] = $package;
        return $this;
    }

    /**
     * isset packageContainers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageContainers($index)
    {
        return isset($this->packageContainers[$index]);
    }

    /**
     * unset packageContainers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageContainers($index)
    {
        unset($this->packageContainers[$index]);
    }

    /**
     * Gets as packageContainers
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageContainerItemType[]
     */
    public function getPackageContainers()
    {
        return $this->packageContainers;
    }

    /**
     * Sets a new packageContainers
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageContainerItemType[] $packageContainers
     * @return self
     */
    public function setPackageContainers(array $packageContainers = null)
    {
        $this->packageContainers = $packageContainers;
        return $this;
    }

    /**
     * Adds as deletedItems
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDDeletedItemListType $deletedItems
     */
    public function addToDeletedItems(\Conecto\FeratelDsi\Dtos\BDDeletedItemListType $deletedItems)
    {
        $this->deletedItems[] = $deletedItems;
        return $this;
    }

    /**
     * isset deletedItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedItems($index)
    {
        return isset($this->deletedItems[$index]);
    }

    /**
     * unset deletedItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedItems($index)
    {
        unset($this->deletedItems[$index]);
    }

    /**
     * Gets as deletedItems
     *
     * @return \Conecto\FeratelDsi\Dtos\BDDeletedItemListType[]
     */
    public function getDeletedItems()
    {
        return $this->deletedItems;
    }

    /**
     * Sets a new deletedItems
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDeletedItemListType[] $deletedItems
     * @return self
     */
    public function setDeletedItems(array $deletedItems = null)
    {
        $this->deletedItems = $deletedItems;
        return $this;
    }

    /**
     * Gets as keyValues
     *
     * @return \Conecto\FeratelDsi\Dtos\KeyValuesRSType
     */
    public function getKeyValues()
    {
        return $this->keyValues;
    }

    /**
     * Sets a new keyValues
     *
     * @param \Conecto\FeratelDsi\Dtos\KeyValuesRSType $keyValues
     * @return self
     */
    public function setKeyValues(?\Conecto\FeratelDsi\Dtos\KeyValuesRSType $keyValues = null)
    {
        $this->keyValues = $keyValues;
        return $this;
    }

    /**
     * Gets as shoppingCart
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType
     */
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * Sets a new shoppingCart
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType $shoppingCart
     * @return self
     */
    public function setShoppingCart(?\Conecto\FeratelDsi\Dtos\ShoppingCartType $shoppingCart = null)
    {
        $this->shoppingCart = $shoppingCart;
        return $this;
    }

    /**
     * Gets as shoppingCartStatus
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartStatusType
     */
    public function getShoppingCartStatus()
    {
        return $this->shoppingCartStatus;
    }

    /**
     * Sets a new shoppingCartStatus
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartStatusType $shoppingCartStatus
     * @return self
     */
    public function setShoppingCartStatus(?\Conecto\FeratelDsi\Dtos\ShoppingCartStatusType $shoppingCartStatus = null)
    {
        $this->shoppingCartStatus = $shoppingCartStatus;
        return $this;
    }

    /**
     * Gets as guest
     *
     * @return \Conecto\FeratelDsi\Dtos\GuestFullInfoType
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * @param \Conecto\FeratelDsi\Dtos\GuestFullInfoType $guest
     * @return self
     */
    public function setGuest(?\Conecto\FeratelDsi\Dtos\GuestFullInfoType $guest = null)
    {
        $this->guest = $guest;
        return $this;
    }

    /**
     * Gets as booking
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingType
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Sets a new booking
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingType $booking
     * @return self
     */
    public function setBooking(?\Conecto\FeratelDsi\Dtos\BookingType $booking = null)
    {
        $this->booking = $booking;
        return $this;
    }

    /**
     * Adds as transaction
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TransactionType $transaction
     */
    public function addToTransactions(\Conecto\FeratelDsi\Dtos\TransactionType $transaction)
    {
        $this->transactions[] = $transaction;
        return $this;
    }

    /**
     * isset transactions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransactions($index)
    {
        return isset($this->transactions[$index]);
    }

    /**
     * unset transactions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransactions($index)
    {
        unset($this->transactions[$index]);
    }

    /**
     * Gets as transactions
     *
     * @return \Conecto\FeratelDsi\Dtos\TransactionType[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Sets a new transactions
     *
     * @param \Conecto\FeratelDsi\Dtos\TransactionType[] $transactions
     * @return self
     */
    public function setTransactions(array $transactions = null)
    {
        $this->transactions = $transactions;
        return $this;
    }

    /**
     * Gets as canceledBooking
     *
     * @return \Conecto\FeratelDsi\Dtos\CanceledBookingType
     */
    public function getCanceledBooking()
    {
        return $this->canceledBooking;
    }

    /**
     * Sets a new canceledBooking
     *
     * @param \Conecto\FeratelDsi\Dtos\CanceledBookingType $canceledBooking
     * @return self
     */
    public function setCanceledBooking(?\Conecto\FeratelDsi\Dtos\CanceledBookingType $canceledBooking = null)
    {
        $this->canceledBooking = $canceledBooking;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DBNumberItemType $item
     */
    public function addToRequests(\Conecto\FeratelDsi\Dtos\DBNumberItemType $item)
    {
        $this->requests[] = $item;
        return $this;
    }

    /**
     * isset requests
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequests($index)
    {
        return isset($this->requests[$index]);
    }

    /**
     * unset requests
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequests($index)
    {
        unset($this->requests[$index]);
    }

    /**
     * Gets as requests
     *
     * @return \Conecto\FeratelDsi\Dtos\DBNumberItemType[]
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Sets a new requests
     *
     * @param \Conecto\FeratelDsi\Dtos\DBNumberItemType[] $requests
     * @return self
     */
    public function setRequests(array $requests = null)
    {
        $this->requests = $requests;
        return $this;
    }

    /**
     * Gets as organisationInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\OrganisationInformationResultType
     */
    public function getOrganisationInformation()
    {
        return $this->organisationInformation;
    }

    /**
     * Sets a new organisationInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\OrganisationInformationResultType $organisationInformation
     * @return self
     */
    public function setOrganisationInformation(?\Conecto\FeratelDsi\Dtos\OrganisationInformationResultType $organisationInformation = null)
    {
        $this->organisationInformation = $organisationInformation;
        return $this;
    }

    /**
     * Gets as checkEffectData
     *
     * @return \Conecto\FeratelDsi\Dtos\CheckEffectResultType
     */
    public function getCheckEffectData()
    {
        return $this->checkEffectData;
    }

    /**
     * Sets a new checkEffectData
     *
     * @param \Conecto\FeratelDsi\Dtos\CheckEffectResultType $checkEffectData
     * @return self
     */
    public function setCheckEffectData(?\Conecto\FeratelDsi\Dtos\CheckEffectResultType $checkEffectData = null)
    {
        $this->checkEffectData = $checkEffectData;
        return $this;
    }

    /**
     * Adds as checkEffectUser
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CheckEffectUserType $checkEffectUser
     */
    public function addToCheckEffectUsers(\Conecto\FeratelDsi\Dtos\CheckEffectUserType $checkEffectUser)
    {
        $this->checkEffectUsers[] = $checkEffectUser;
        return $this;
    }

    /**
     * isset checkEffectUsers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCheckEffectUsers($index)
    {
        return isset($this->checkEffectUsers[$index]);
    }

    /**
     * unset checkEffectUsers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCheckEffectUsers($index)
    {
        unset($this->checkEffectUsers[$index]);
    }

    /**
     * Gets as checkEffectUsers
     *
     * @return \Conecto\FeratelDsi\Dtos\CheckEffectUserType[]
     */
    public function getCheckEffectUsers()
    {
        return $this->checkEffectUsers;
    }

    /**
     * Sets a new checkEffectUsers
     *
     * @param \Conecto\FeratelDsi\Dtos\CheckEffectUserType[] $checkEffectUsers
     * @return self
     */
    public function setCheckEffectUsers(array $checkEffectUsers = null)
    {
        $this->checkEffectUsers = $checkEffectUsers;
        return $this;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ImportBasicDataServieProviderType $serviceProvider
     */
    public function addToImportedServiceProviders(\Conecto\FeratelDsi\Dtos\ImportBasicDataServieProviderType $serviceProvider)
    {
        $this->importedServiceProviders[] = $serviceProvider;
        return $this;
    }

    /**
     * isset importedServiceProviders
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImportedServiceProviders($index)
    {
        return isset($this->importedServiceProviders[$index]);
    }

    /**
     * unset importedServiceProviders
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImportedServiceProviders($index)
    {
        unset($this->importedServiceProviders[$index]);
    }

    /**
     * Gets as importedServiceProviders
     *
     * @return \Conecto\FeratelDsi\Dtos\ImportBasicDataServieProviderType[]
     */
    public function getImportedServiceProviders()
    {
        return $this->importedServiceProviders;
    }

    /**
     * Sets a new importedServiceProviders
     *
     * @param \Conecto\FeratelDsi\Dtos\ImportBasicDataServieProviderType[] $importedServiceProviders
     * @return self
     */
    public function setImportedServiceProviders(array $importedServiceProviders = null)
    {
        $this->importedServiceProviders = $importedServiceProviders;
        return $this;
    }

    /**
     * Adds as package
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageResultType $package
     */
    public function addToPackage(\Conecto\FeratelDsi\Dtos\SearchPackageResultType $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageResultType[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageResultType[] $package
     * @return self
     */
    public function setPackage(array $package = null)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * Gets as packageDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType
     */
    public function getPackageDetails()
    {
        return $this->packageDetails;
    }

    /**
     * Sets a new packageDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType $packageDetails
     * @return self
     */
    public function setPackageDetails(?\Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType $packageDetails = null)
    {
        $this->packageDetails = $packageDetails;
        return $this;
    }

    /**
     * Gets as packageCalculation
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType
     */
    public function getPackageCalculation()
    {
        return $this->packageCalculation;
    }

    /**
     * Sets a new packageCalculation
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType $packageCalculation
     * @return self
     */
    public function setPackageCalculation(?\Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType $packageCalculation = null)
    {
        $this->packageCalculation = $packageCalculation;
        return $this;
    }

    /**
     * Adds as calendar
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CalendarType $calendar
     */
    public function addToCalendarDates(\Conecto\FeratelDsi\Dtos\CalendarType $calendar)
    {
        $this->calendarDates[] = $calendar;
        return $this;
    }

    /**
     * isset calendarDates
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalendarDates($index)
    {
        return isset($this->calendarDates[$index]);
    }

    /**
     * unset calendarDates
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalendarDates($index)
    {
        unset($this->calendarDates[$index]);
    }

    /**
     * Gets as calendarDates
     *
     * @return \Conecto\FeratelDsi\Dtos\CalendarType[]
     */
    public function getCalendarDates()
    {
        return $this->calendarDates;
    }

    /**
     * Sets a new calendarDates
     *
     * @param \Conecto\FeratelDsi\Dtos\CalendarType[] $calendarDates
     * @return self
     */
    public function setCalendarDates(array $calendarDates = null)
    {
        $this->calendarDates = $calendarDates;
        return $this;
    }

    /**
     * Gets as calculatedOptionalFees
     *
     * @return \Conecto\FeratelDsi\Dtos\CalculatedOptionalFeesType
     */
    public function getCalculatedOptionalFees()
    {
        return $this->calculatedOptionalFees;
    }

    /**
     * Sets a new calculatedOptionalFees
     *
     * @param \Conecto\FeratelDsi\Dtos\CalculatedOptionalFeesType $calculatedOptionalFees
     * @return self
     */
    public function setCalculatedOptionalFees(?\Conecto\FeratelDsi\Dtos\CalculatedOptionalFeesType $calculatedOptionalFees = null)
    {
        $this->calculatedOptionalFees = $calculatedOptionalFees;
        return $this;
    }

    /**
     * Gets as keyValueData
     *
     * @return \Conecto\FeratelDsi\Dtos\NLKeyValueDataType
     */
    public function getKeyValueData()
    {
        return $this->keyValueData;
    }

    /**
     * Sets a new keyValueData
     *
     * @param \Conecto\FeratelDsi\Dtos\NLKeyValueDataType $keyValueData
     * @return self
     */
    public function setKeyValueData(?\Conecto\FeratelDsi\Dtos\NLKeyValueDataType $keyValueData = null)
    {
        $this->keyValueData = $keyValueData;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLAddressType $address
     */
    public function addToAddresses(\Conecto\FeratelDsi\Dtos\NLAddressType $address)
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * isset addresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * @return \Conecto\FeratelDsi\Dtos\NLAddressType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * @param \Conecto\FeratelDsi\Dtos\NLAddressType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * Adds as insertedAddress
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLInsertedAddressType $insertedAddress
     */
    public function addToInsertedAddresses(\Conecto\FeratelDsi\Dtos\NLInsertedAddressType $insertedAddress)
    {
        $this->insertedAddresses[] = $insertedAddress;
        return $this;
    }

    /**
     * isset insertedAddresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsertedAddresses($index)
    {
        return isset($this->insertedAddresses[$index]);
    }

    /**
     * unset insertedAddresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsertedAddresses($index)
    {
        unset($this->insertedAddresses[$index]);
    }

    /**
     * Gets as insertedAddresses
     *
     * @return \Conecto\FeratelDsi\Dtos\NLInsertedAddressType[]
     */
    public function getInsertedAddresses()
    {
        return $this->insertedAddresses;
    }

    /**
     * Sets a new insertedAddresses
     *
     * @param \Conecto\FeratelDsi\Dtos\NLInsertedAddressType[] $insertedAddresses
     * @return self
     */
    public function setInsertedAddresses(array $insertedAddresses = null)
    {
        $this->insertedAddresses = $insertedAddresses;
        return $this;
    }

    /**
     * Gets as updatedAddress
     *
     * @return \Conecto\FeratelDsi\Dtos\NLUpdatedAddressType
     */
    public function getUpdatedAddress()
    {
        return $this->updatedAddress;
    }

    /**
     * Sets a new updatedAddress
     *
     * @param \Conecto\FeratelDsi\Dtos\NLUpdatedAddressType $updatedAddress
     * @return self
     */
    public function setUpdatedAddress(?\Conecto\FeratelDsi\Dtos\NLUpdatedAddressType $updatedAddress = null)
    {
        $this->updatedAddress = $updatedAddress;
        return $this;
    }

    /**
     * Adds as deletedAddress
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLDeletedAddressType $deletedAddress
     */
    public function addToDeletedAddresses(\Conecto\FeratelDsi\Dtos\NLDeletedAddressType $deletedAddress)
    {
        $this->deletedAddresses[] = $deletedAddress;
        return $this;
    }

    /**
     * isset deletedAddresses
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedAddresses($index)
    {
        return isset($this->deletedAddresses[$index]);
    }

    /**
     * unset deletedAddresses
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedAddresses($index)
    {
        unset($this->deletedAddresses[$index]);
    }

    /**
     * Gets as deletedAddresses
     *
     * @return \Conecto\FeratelDsi\Dtos\NLDeletedAddressType[]
     */
    public function getDeletedAddresses()
    {
        return $this->deletedAddresses;
    }

    /**
     * Sets a new deletedAddresses
     *
     * @param \Conecto\FeratelDsi\Dtos\NLDeletedAddressType[] $deletedAddresses
     * @return self
     */
    public function setDeletedAddresses(array $deletedAddresses = null)
    {
        $this->deletedAddresses = $deletedAddresses;
        return $this;
    }

    /**
     * Adds as newsletterSend
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSentType $newsletterSend
     */
    public function addToNewslettersSent(\Conecto\FeratelDsi\Dtos\NLNewsletterSentType $newsletterSend)
    {
        $this->newslettersSent[] = $newsletterSend;
        return $this;
    }

    /**
     * isset newslettersSent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewslettersSent($index)
    {
        return isset($this->newslettersSent[$index]);
    }

    /**
     * unset newslettersSent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewslettersSent($index)
    {
        unset($this->newslettersSent[$index]);
    }

    /**
     * Gets as newslettersSent
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewsletterSentType[]
     */
    public function getNewslettersSent()
    {
        return $this->newslettersSent;
    }

    /**
     * Sets a new newslettersSent
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewsletterSentType[] $newslettersSent
     * @return self
     */
    public function setNewslettersSent(array $newslettersSent = null)
    {
        $this->newslettersSent = $newslettersSent;
        return $this;
    }

    /**
     * Adds as newsletterSubscribed
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType $newsletterSubscribed
     */
    public function addToNewslettersSubscribed(\Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType $newsletterSubscribed)
    {
        $this->newslettersSubscribed[] = $newsletterSubscribed;
        return $this;
    }

    /**
     * isset newslettersSubscribed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewslettersSubscribed($index)
    {
        return isset($this->newslettersSubscribed[$index]);
    }

    /**
     * unset newslettersSubscribed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewslettersSubscribed($index)
    {
        unset($this->newslettersSubscribed[$index]);
    }

    /**
     * Gets as newslettersSubscribed
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType[]
     */
    public function getNewslettersSubscribed()
    {
        return $this->newslettersSubscribed;
    }

    /**
     * Sets a new newslettersSubscribed
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewslettersSubscribedType[] $newslettersSubscribed
     * @return self
     */
    public function setNewslettersSubscribed(array $newslettersSubscribed = null)
    {
        $this->newslettersSubscribed = $newslettersSubscribed;
        return $this;
    }

    /**
     * Adds as newsletterUnsubscribe
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLNewslettersUnsubscribedType $newsletterUnsubscribe
     */
    public function addToNewslettersUnsubscribed(\Conecto\FeratelDsi\Dtos\NLNewslettersUnsubscribedType $newsletterUnsubscribe)
    {
        $this->newslettersUnsubscribed[] = $newsletterUnsubscribe;
        return $this;
    }

    /**
     * isset newslettersUnsubscribed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNewslettersUnsubscribed($index)
    {
        return isset($this->newslettersUnsubscribed[$index]);
    }

    /**
     * unset newslettersUnsubscribed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNewslettersUnsubscribed($index)
    {
        unset($this->newslettersUnsubscribed[$index]);
    }

    /**
     * Gets as newslettersUnsubscribed
     *
     * @return \Conecto\FeratelDsi\Dtos\NLNewslettersUnsubscribedType[]
     */
    public function getNewslettersUnsubscribed()
    {
        return $this->newslettersUnsubscribed;
    }

    /**
     * Sets a new newslettersUnsubscribed
     *
     * @param \Conecto\FeratelDsi\Dtos\NLNewslettersUnsubscribedType[] $newslettersUnsubscribed
     * @return self
     */
    public function setNewslettersUnsubscribed(array $newslettersUnsubscribed = null)
    {
        $this->newslettersUnsubscribed = $newslettersUnsubscribed;
        return $this;
    }

    /**
     * Adds as consentSubscribed
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType $consentSubscribed
     */
    public function addToConsentsSubscribed(\Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType $consentSubscribed)
    {
        $this->consentsSubscribed[] = $consentSubscribed;
        return $this;
    }

    /**
     * isset consentsSubscribed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentsSubscribed($index)
    {
        return isset($this->consentsSubscribed[$index]);
    }

    /**
     * unset consentsSubscribed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentsSubscribed($index)
    {
        unset($this->consentsSubscribed[$index]);
    }

    /**
     * Gets as consentsSubscribed
     *
     * @return \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType[]
     */
    public function getConsentsSubscribed()
    {
        return $this->consentsSubscribed;
    }

    /**
     * Sets a new consentsSubscribed
     *
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsSubscribedListType\ConsentSubscribedAType[] $consentsSubscribed
     * @return self
     */
    public function setConsentsSubscribed(array $consentsSubscribed = null)
    {
        $this->consentsSubscribed = $consentsSubscribed;
        return $this;
    }

    /**
     * Adds as consentUnsubscribed
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType $consentUnsubscribed
     */
    public function addToConsentsUnsubscribed(\Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType $consentUnsubscribed)
    {
        $this->consentsUnsubscribed[] = $consentUnsubscribed;
        return $this;
    }

    /**
     * isset consentsUnsubscribed
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsentsUnsubscribed($index)
    {
        return isset($this->consentsUnsubscribed[$index]);
    }

    /**
     * unset consentsUnsubscribed
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsentsUnsubscribed($index)
    {
        unset($this->consentsUnsubscribed[$index]);
    }

    /**
     * Gets as consentsUnsubscribed
     *
     * @return \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType[]
     */
    public function getConsentsUnsubscribed()
    {
        return $this->consentsUnsubscribed;
    }

    /**
     * Sets a new consentsUnsubscribed
     *
     * @param \Conecto\FeratelDsi\Dtos\NLConsentsUnsubscribedListType\ConsentUnsubscribedAType[] $consentsUnsubscribed
     * @return self
     */
    public function setConsentsUnsubscribed(array $consentsUnsubscribed = null)
    {
        $this->consentsUnsubscribed = $consentsUnsubscribed;
        return $this;
    }

    /**
     * Adds as availabilityCalendar
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AvailabilityCalendarListType $availabilityCalendar
     */
    public function addToAvailabilityCalendar(\Conecto\FeratelDsi\Dtos\AvailabilityCalendarListType $availabilityCalendar)
    {
        $this->availabilityCalendar[] = $availabilityCalendar;
        return $this;
    }

    /**
     * isset availabilityCalendar
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailabilityCalendar($index)
    {
        return isset($this->availabilityCalendar[$index]);
    }

    /**
     * unset availabilityCalendar
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailabilityCalendar($index)
    {
        unset($this->availabilityCalendar[$index]);
    }

    /**
     * Gets as availabilityCalendar
     *
     * @return \Conecto\FeratelDsi\Dtos\AvailabilityCalendarListType[]
     */
    public function getAvailabilityCalendar()
    {
        return $this->availabilityCalendar;
    }

    /**
     * Sets a new availabilityCalendar
     *
     * @param \Conecto\FeratelDsi\Dtos\AvailabilityCalendarListType[] $availabilityCalendar
     * @return self
     */
    public function setAvailabilityCalendar(array $availabilityCalendar = null)
    {
        $this->availabilityCalendar = $availabilityCalendar;
        return $this;
    }

    /**
     * Adds as cancellationInformation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\CancellationInformationAType $cancellationInformation
     */
    public function addToCancellationInformation(\Conecto\FeratelDsi\Dtos\ResponseType\CancellationInformationAType $cancellationInformation)
    {
        $this->cancellationInformation[] = $cancellationInformation;
        return $this;
    }

    /**
     * isset cancellationInformation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationInformation($index)
    {
        return isset($this->cancellationInformation[$index]);
    }

    /**
     * unset cancellationInformation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationInformation($index)
    {
        unset($this->cancellationInformation[$index]);
    }

    /**
     * Gets as cancellationInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\ResponseType\CancellationInformationAType[]
     */
    public function getCancellationInformation()
    {
        return $this->cancellationInformation;
    }

    /**
     * Sets a new cancellationInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\CancellationInformationAType[] $cancellationInformation
     * @return self
     */
    public function setCancellationInformation(array $cancellationInformation = null)
    {
        $this->cancellationInformation = $cancellationInformation;
        return $this;
    }

    /**
     * Gets as paymentInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType
     */
    public function getPaymentInformation()
    {
        return $this->paymentInformation;
    }

    /**
     * Sets a new paymentInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation
     * @return self
     */
    public function setPaymentInformation(?\Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation = null)
    {
        $this->paymentInformation = $paymentInformation;
        return $this;
    }

    /**
     * Adds as event
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType $event
     */
    public function addToImportEvents(\Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType $event)
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
     * @return \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType[]
     */
    public function getImportEvents()
    {
        return $this->importEvents;
    }

    /**
     * Sets a new importEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType[] $importEvents
     * @return self
     */
    public function setImportEvents(array $importEvents = null)
    {
        $this->importEvents = $importEvents;
        return $this;
    }

    /**
     * Adds as standardInformationForm
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType $standardInformationForm
     */
    public function addToStandardInformationForms(\Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType $standardInformationForm)
    {
        $this->standardInformationForms[] = $standardInformationForm;
        return $this;
    }

    /**
     * isset standardInformationForms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStandardInformationForms($index)
    {
        return isset($this->standardInformationForms[$index]);
    }

    /**
     * unset standardInformationForms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStandardInformationForms($index)
    {
        unset($this->standardInformationForms[$index]);
    }

    /**
     * Gets as standardInformationForms
     *
     * @return \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType[]
     */
    public function getStandardInformationForms()
    {
        return $this->standardInformationForms;
    }

    /**
     * Sets a new standardInformationForms
     *
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType[] $standardInformationForms
     * @return self
     */
    public function setStandardInformationForms(array $standardInformationForms = null)
    {
        $this->standardInformationForms = $standardInformationForms;
        return $this;
    }

    /**
     * Gets as electronicPaymentCheckOut
     *
     * @return \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRSType
     */
    public function getElectronicPaymentCheckOut()
    {
        return $this->electronicPaymentCheckOut;
    }

    /**
     * Sets a new electronicPaymentCheckOut
     *
     * @param \Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRSType $electronicPaymentCheckOut
     * @return self
     */
    public function setElectronicPaymentCheckOut(?\Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRSType $electronicPaymentCheckOut = null)
    {
        $this->electronicPaymentCheckOut = $electronicPaymentCheckOut;
        return $this;
    }
}

