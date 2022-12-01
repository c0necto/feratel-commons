<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing OfferRequestSettingsType
 *
 *
 * XSD Type: OfferRequestSettingsType
 */
class OfferRequestSettingsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\OfferRequestSettingsType\ServiceProviderAType $serviceProvider
     */
    private $serviceProvider = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\OfferRequestSettingsType\ServiceProviderAType $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
    }

    /**
     * Gets as serviceProvider
     *
     * @return \Conecto\FeratelDsi\Dtos\OfferRequestSettingsType\ServiceProviderAType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\OfferRequestSettingsType\ServiceProviderAType $serviceProvider
     * @return self
     */
    public function setServiceProvider(?\Conecto\FeratelDsi\Dtos\OfferRequestSettingsType\ServiceProviderAType $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }
}

