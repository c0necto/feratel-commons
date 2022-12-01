<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType;

/**
 * Class representing ParentAType
 */
class ParentAType
{
    /**
     * @var string $locationId
     */
    private $locationId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\ParentAType\ServiceProviderAType $serviceProvider
     */
    private $serviceProvider = null;

    /**
     * @var string $service
     */
    private $service = null;

    public function __construct(string $locationId = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\ParentAType\ServiceProviderAType $serviceProvider = null, string $service = null)
    {
        $this->locationId = $locationId;
        $this->serviceProvider = $serviceProvider;
        $this->service = $service;
    }

    /**
     * Gets as locationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Sets a new locationId
     *
     * @param string $locationId
     * @return self
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
        return $this;
    }

    /**
     * Gets as serviceProvider
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\ParentAType\ServiceProviderAType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\ParentAType\ServiceProviderAType $serviceProvider
     * @return self
     */
    public function setServiceProvider(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\ParentAType\ServiceProviderAType $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param string $service
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }
}

