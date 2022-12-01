<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ServiceCodeListType
 *
 *
 * XSD Type: ServiceCodeList
 */
class ServiceCodeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceCodeType[] $serviceCode
     */
    private $serviceCode = [
        
    ];

    public function __construct(array $serviceCode = null)
    {
        $this->serviceCode = $serviceCode;
    }

    /**
     * Adds as serviceCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceCodeType $serviceCode
     */
    public function addToServiceCode(\Conecto\FeratelDsi\Dtos\ServiceCodeType $serviceCode)
    {
        $this->serviceCode[] = $serviceCode;
        return $this;
    }

    /**
     * isset serviceCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceCode($index)
    {
        return isset($this->serviceCode[$index]);
    }

    /**
     * unset serviceCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceCode($index)
    {
        unset($this->serviceCode[$index]);
    }

    /**
     * Gets as serviceCode
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceCodeType[]
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Sets a new serviceCode
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceCodeType[] $serviceCode
     * @return self
     */
    public function setServiceCode(array $serviceCode = null)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }
}

