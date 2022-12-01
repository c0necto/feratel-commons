<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType;

/**
 * Class representing ServicesAType
 */
class ServicesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    public function __construct(array $service = null)
    {
        $this->service = $service;
    }

    /**
     * Adds as service
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType $service
     */
    public function addToService(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }
}

