<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AdditionalServiceTypeListType
 *
 *
 * XSD Type: AdditionalServiceTypeList
 */
class AdditionalServiceTypeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $additionalServiceType
     */
    private $additionalServiceType = [
        
    ];

    public function __construct(array $additionalServiceType = null)
    {
        $this->additionalServiceType = $additionalServiceType;
    }

    /**
     * Adds as additionalServiceType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $additionalServiceType
     */
    public function addToAdditionalServiceType(\Conecto\FeratelDsi\Dtos\ClassificationType $additionalServiceType)
    {
        $this->additionalServiceType[] = $additionalServiceType;
        return $this;
    }

    /**
     * isset additionalServiceType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalServiceType($index)
    {
        return isset($this->additionalServiceType[$index]);
    }

    /**
     * unset additionalServiceType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalServiceType($index)
    {
        unset($this->additionalServiceType[$index]);
    }

    /**
     * Gets as additionalServiceType
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getAdditionalServiceType()
    {
        return $this->additionalServiceType;
    }

    /**
     * Sets a new additionalServiceType
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $additionalServiceType
     * @return self
     */
    public function setAdditionalServiceType(array $additionalServiceType = null)
    {
        $this->additionalServiceType = $additionalServiceType;
        return $this;
    }
}

