<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CEServiceProviderListType
 *
 *
 * XSD Type: CEServiceProviderList
 */
class CEServiceProviderListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType[] $serviceProvider
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
     * @param \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType $serviceProvider
     */
    public function addToServiceProvider(\Conecto\FeratelDsi\Dtos\CEServiceProviderItemType $serviceProvider)
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
     * @return \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType[]
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType[] $serviceProvider
     * @return self
     */
    public function setServiceProvider(array $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }
}

