<?php

namespace Conecto\FeratelDsi\Dtos\SearchServiceType;

/**
 * Class representing ServiceFacilityAType
 */
class ServiceFacilityAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType[] $item
     */
    private $item = [
        
    ];

    public function __construct(array $item = null)
    {
        $this->item = $item;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType $item
     */
    public function addToItem(\Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType\ItemAType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}

