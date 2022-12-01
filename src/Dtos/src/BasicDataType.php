<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasicDataType
 *
 * Defines basic data requested information object.
 * XSD Type: BasicDataType
 */
class BasicDataType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\FiltersType $filters
     */
    private $filters = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProvidersType $serviceProviders
     */
    private $serviceProviders = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderType $changedServiceProviders
     */
    private $changedServiceProviders = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDShopItemsType $shopItems
     */
    private $shopItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventsType $events
     */
    private $events = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedEventsType $changedEvents
     */
    private $changedEvents = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureType $infrastructure
     */
    private $infrastructure = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedInfrastructuresType $changedInfrastructures
     */
    private $changedInfrastructures = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackagesType $packages
     */
    private $packages = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageContainersType $packageContainers
     */
    private $packageContainers = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDeletedItemsType $deletedItems
     */
    private $deletedItems = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\FiltersType $filters = null, \Conecto\FeratelDsi\Dtos\BDServiceProvidersType $serviceProviders = null, \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderType $changedServiceProviders = null, \Conecto\FeratelDsi\Dtos\BDShopItemsType $shopItems = null, \Conecto\FeratelDsi\Dtos\BDEventsType $events = null, \Conecto\FeratelDsi\Dtos\BDChangedEventsType $changedEvents = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureType $infrastructure = null, \Conecto\FeratelDsi\Dtos\BDChangedInfrastructuresType $changedInfrastructures = null, \Conecto\FeratelDsi\Dtos\BDPackagesType $packages = null, \Conecto\FeratelDsi\Dtos\BDPackageContainersType $packageContainers = null, \Conecto\FeratelDsi\Dtos\BDDeletedItemsType $deletedItems = null)
    {
        $this->filters = $filters;
        $this->serviceProviders = $serviceProviders;
        $this->changedServiceProviders = $changedServiceProviders;
        $this->shopItems = $shopItems;
        $this->events = $events;
        $this->changedEvents = $changedEvents;
        $this->infrastructure = $infrastructure;
        $this->changedInfrastructures = $changedInfrastructures;
        $this->packages = $packages;
        $this->packageContainers = $packageContainers;
        $this->deletedItems = $deletedItems;
    }

    /**
     * Gets as filters
     *
     * @return \Conecto\FeratelDsi\Dtos\FiltersType
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Sets a new filters
     *
     * @param \Conecto\FeratelDsi\Dtos\FiltersType $filters
     * @return self
     */
    public function setFilters(?\Conecto\FeratelDsi\Dtos\FiltersType $filters = null)
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * Gets as serviceProviders
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProvidersType
     */
    public function getServiceProviders()
    {
        return $this->serviceProviders;
    }

    /**
     * Sets a new serviceProviders
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProvidersType $serviceProviders
     * @return self
     */
    public function setServiceProviders(?\Conecto\FeratelDsi\Dtos\BDServiceProvidersType $serviceProviders = null)
    {
        $this->serviceProviders = $serviceProviders;
        return $this;
    }

    /**
     * Gets as changedServiceProviders
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderType
     */
    public function getChangedServiceProviders()
    {
        return $this->changedServiceProviders;
    }

    /**
     * Sets a new changedServiceProviders
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderType $changedServiceProviders
     * @return self
     */
    public function setChangedServiceProviders(?\Conecto\FeratelDsi\Dtos\BDChangedServiceProviderType $changedServiceProviders = null)
    {
        $this->changedServiceProviders = $changedServiceProviders;
        return $this;
    }

    /**
     * Gets as shopItems
     *
     * @return \Conecto\FeratelDsi\Dtos\BDShopItemsType
     */
    public function getShopItems()
    {
        return $this->shopItems;
    }

    /**
     * Sets a new shopItems
     *
     * @param \Conecto\FeratelDsi\Dtos\BDShopItemsType $shopItems
     * @return self
     */
    public function setShopItems(?\Conecto\FeratelDsi\Dtos\BDShopItemsType $shopItems = null)
    {
        $this->shopItems = $shopItems;
        return $this;
    }

    /**
     * Gets as events
     *
     * @return \Conecto\FeratelDsi\Dtos\BDEventsType
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventsType $events
     * @return self
     */
    public function setEvents(?\Conecto\FeratelDsi\Dtos\BDEventsType $events = null)
    {
        $this->events = $events;
        return $this;
    }

    /**
     * Gets as changedEvents
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedEventsType
     */
    public function getChangedEvents()
    {
        return $this->changedEvents;
    }

    /**
     * Sets a new changedEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedEventsType $changedEvents
     * @return self
     */
    public function setChangedEvents(?\Conecto\FeratelDsi\Dtos\BDChangedEventsType $changedEvents = null)
    {
        $this->changedEvents = $changedEvents;
        return $this;
    }

    /**
     * Gets as infrastructure
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureType
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Sets a new infrastructure
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureType $infrastructure
     * @return self
     */
    public function setInfrastructure(?\Conecto\FeratelDsi\Dtos\BDInfrastructureType $infrastructure = null)
    {
        $this->infrastructure = $infrastructure;
        return $this;
    }

    /**
     * Gets as changedInfrastructures
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedInfrastructuresType
     */
    public function getChangedInfrastructures()
    {
        return $this->changedInfrastructures;
    }

    /**
     * Sets a new changedInfrastructures
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedInfrastructuresType $changedInfrastructures
     * @return self
     */
    public function setChangedInfrastructures(?\Conecto\FeratelDsi\Dtos\BDChangedInfrastructuresType $changedInfrastructures = null)
    {
        $this->changedInfrastructures = $changedInfrastructures;
        return $this;
    }

    /**
     * Gets as packages
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackagesType
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Sets a new packages
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagesType $packages
     * @return self
     */
    public function setPackages(?\Conecto\FeratelDsi\Dtos\BDPackagesType $packages = null)
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * Gets as packageContainers
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageContainersType
     */
    public function getPackageContainers()
    {
        return $this->packageContainers;
    }

    /**
     * Sets a new packageContainers
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageContainersType $packageContainers
     * @return self
     */
    public function setPackageContainers(?\Conecto\FeratelDsi\Dtos\BDPackageContainersType $packageContainers = null)
    {
        $this->packageContainers = $packageContainers;
        return $this;
    }

    /**
     * Gets as deletedItems
     *
     * @return \Conecto\FeratelDsi\Dtos\BDDeletedItemsType
     */
    public function getDeletedItems()
    {
        return $this->deletedItems;
    }

    /**
     * Sets a new deletedItems
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDeletedItemsType $deletedItems
     * @return self
     */
    public function setDeletedItems(?\Conecto\FeratelDsi\Dtos\BDDeletedItemsType $deletedItems = null)
    {
        $this->deletedItems = $deletedItems;
        return $this;
    }
}

