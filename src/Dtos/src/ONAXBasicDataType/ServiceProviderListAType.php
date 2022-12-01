<?php

namespace Conecto\FeratelDsi\Dtos\ONAXBasicDataType;

/**
 * Class representing ServiceProviderListAType
 */
class ServiceProviderListAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType[] $serviceProvider
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
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType $serviceProvider
     */
    public function addToServiceProvider(\Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType $serviceProvider)
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
     * @return \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType[]
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceProviderItemType[] $serviceProvider
     * @return self
     */
    public function setServiceProvider(array $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }
}

