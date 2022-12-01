<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedServiceProviderListType
 *
 *
 * XSD Type: BDChangedServiceProviderList
 */
class BDChangedServiceProviderListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType[] $serviceProvider
     */
    private $serviceProvider = [
        
    ];

    public function __construct(array $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType $serviceProvider
     */
    public function addToServiceProvider(\Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType $serviceProvider)
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
     * @return \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType[]
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedServiceProviderListType\ServiceProviderAType[] $serviceProvider
     * @return self
     */
    public function setServiceProvider(array $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }
}

