<?php

namespace Conecto\FeratelDsi\Dtos\SearchParametersType;

/**
 * Class representing AccommodationFacilityAType
 */
class AccommodationFacilityAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType[] $item
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
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType $item
     */
    public function addToItem(\Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType $item)
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
     * @return \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchParametersType\AccommodationFacilityAType\ItemAType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}

