<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing InfrastructureTypeListType
 *
 *
 * XSD Type: InfrastructureTypeList
 */
class InfrastructureTypeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\InfrastructureTypeType[] $infrastructureType
     */
    private $infrastructureType = [
        
    ];

    public function __construct(array $infrastructureType = null)
    {
        $this->infrastructureType = $infrastructureType;
    }

    /**
     * Adds as infrastructureType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTypeType $infrastructureType
     */
    public function addToInfrastructureType(\Conecto\FeratelDsi\Dtos\InfrastructureTypeType $infrastructureType)
    {
        $this->infrastructureType[] = $infrastructureType;
        return $this;
    }

    /**
     * isset infrastructureType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfrastructureType($index)
    {
        return isset($this->infrastructureType[$index]);
    }

    /**
     * unset infrastructureType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfrastructureType($index)
    {
        unset($this->infrastructureType[$index]);
    }

    /**
     * Gets as infrastructureType
     *
     * @return \Conecto\FeratelDsi\Dtos\InfrastructureTypeType[]
     */
    public function getInfrastructureType()
    {
        return $this->infrastructureType;
    }

    /**
     * Sets a new infrastructureType
     *
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTypeType[] $infrastructureType
     * @return self
     */
    public function setInfrastructureType(array $infrastructureType = null)
    {
        $this->infrastructureType = $infrastructureType;
        return $this;
    }
}

