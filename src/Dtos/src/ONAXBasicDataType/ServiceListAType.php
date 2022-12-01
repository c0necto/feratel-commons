<?php

namespace Conecto\FeratelDsi\Dtos\ONAXBasicDataType;

/**
 * Class representing ServiceListAType
 */
class ServiceListAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXServiceItemType[] $service
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
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceItemType $service
     */
    public function addToService(\Conecto\FeratelDsi\Dtos\ONAXServiceItemType $service)
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
     * @return \Conecto\FeratelDsi\Dtos\ONAXServiceItemType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXServiceItemType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }
}

