<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedInfrastructureListType
 *
 *
 * XSD Type: BDChangedInfrastructureList
 */
class BDChangedInfrastructureListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType[] $infrastructure
     */
    private $infrastructure = [
        
    ];

    public function __construct(array $infrastructure = null)
    {
        $this->infrastructure = $infrastructure;
    }

    /**
     * Adds as infrastructure
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType $infrastructure
     */
    public function addToInfrastructure(\Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType $infrastructure)
    {
        $this->infrastructure[] = $infrastructure;
        return $this;
    }

    /**
     * isset infrastructure
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfrastructure($index)
    {
        return isset($this->infrastructure[$index]);
    }

    /**
     * unset infrastructure
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfrastructure($index)
    {
        unset($this->infrastructure[$index]);
    }

    /**
     * Gets as infrastructure
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType[]
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Sets a new infrastructure
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedInfrastructureListType\InfrastructureAType[] $infrastructure
     * @return self
     */
    public function setInfrastructure(array $infrastructure = null)
    {
        $this->infrastructure = $infrastructure;
        return $this;
    }
}

