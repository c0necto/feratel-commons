<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ServiceProviderRequestSettingsType
 *
 *
 * XSD Type: ServiceProviderRequestSettingsType
 */
class ServiceProviderRequestSettingsType
{
    /**
     * @var bool $sendMail
     */
    private $sendMail = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType $serviceProvider
     */
    private $serviceProvider = null;

    public function __construct(bool $sendMail = null, \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType $serviceProvider = null)
    {
        $this->sendMail = $sendMail;
        $this->serviceProvider = $serviceProvider;
    }

    /**
     * Gets as sendMail
     *
     * @return bool
     */
    public function getSendMail()
    {
        return $this->sendMail;
    }

    /**
     * Sets a new sendMail
     *
     * @param bool $sendMail
     * @return self
     */
    public function setSendMail($sendMail)
    {
        $this->sendMail = $sendMail;
        return $this;
    }

    /**
     * Gets as serviceProvider
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType $serviceProvider
     * @return self
     */
    public function setServiceProvider(?\Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }
}

