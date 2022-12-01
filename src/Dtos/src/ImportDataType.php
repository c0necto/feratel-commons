<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ImportDataType
 *
 *
 * XSD Type: ImportDataType
 */
class ImportDataType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\STUServiceProviderType[] $serviceProviders
     */
    private $serviceProviders = null;

    public function __construct(array $serviceProviders = null)
    {
        $this->serviceProviders = $serviceProviders;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\STUServiceProviderType $serviceProvider
     */
    public function addToServiceProviders(\Conecto\FeratelDsi\Dtos\STUServiceProviderType $serviceProvider)
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
     * @return \Conecto\FeratelDsi\Dtos\STUServiceProviderType[]
     */
    public function getServiceProviders()
    {
        return $this->serviceProviders;
    }

    /**
     * Sets a new serviceProviders
     *
     * @param \Conecto\FeratelDsi\Dtos\STUServiceProviderType[] $serviceProviders
     * @return self
     */
    public function setServiceProviders(array $serviceProviders)
    {
        $this->serviceProviders = $serviceProviders;
        return $this;
    }
}

