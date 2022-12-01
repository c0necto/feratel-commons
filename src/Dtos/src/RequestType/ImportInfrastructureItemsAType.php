<?php

namespace Conecto\FeratelDsi\Dtos\RequestType;

/**
 * Class representing ImportInfrastructureItemsAType
 */
class ImportInfrastructureItemsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType[] $infrastructureItem
     */
    private $infrastructureItem = [
        
    ];

    public function __construct(array $infrastructureItem = null)
    {
        $this->infrastructureItem = $infrastructureItem;
    }

    /**
     * Adds as infrastructureItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType $infrastructureItem
     */
    public function addToInfrastructureItem(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType $infrastructureItem)
    {
        $this->infrastructureItem[] = $infrastructureItem;
        return $this;
    }

    /**
     * isset infrastructureItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfrastructureItem($index)
    {
        return isset($this->infrastructureItem[$index]);
    }

    /**
     * unset infrastructureItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfrastructureItem($index)
    {
        unset($this->infrastructureItem[$index]);
    }

    /**
     * Gets as infrastructureItem
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType[]
     */
    public function getInfrastructureItem()
    {
        return $this->infrastructureItem;
    }

    /**
     * Sets a new infrastructureItem
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType[] $infrastructureItem
     * @return self
     */
    public function setInfrastructureItem(array $infrastructureItem)
    {
        $this->infrastructureItem = $infrastructureItem;
        return $this;
    }
}

