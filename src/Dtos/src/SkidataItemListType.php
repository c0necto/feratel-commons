<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SkidataItemListType
 *
 *
 * XSD Type: SkidataItemList
 */
class SkidataItemListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType[] $skidataItem
     */
    private $skidataItem = [
        
    ];

    public function __construct(array $skidataItem = null)
    {
        $this->skidataItem = $skidataItem;
    }

    /**
     * Adds as skidataItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType $skidataItem
     */
    public function addToSkidataItem(\Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType $skidataItem)
    {
        $this->skidataItem[] = $skidataItem;
        return $this;
    }

    /**
     * isset skidataItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSkidataItem($index)
    {
        return isset($this->skidataItem[$index]);
    }

    /**
     * unset skidataItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSkidataItem($index)
    {
        unset($this->skidataItem[$index]);
    }

    /**
     * Gets as skidataItem
     *
     * @return \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType[]
     */
    public function getSkidataItem()
    {
        return $this->skidataItem;
    }

    /**
     * Sets a new skidataItem
     *
     * @param \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType[] $skidataItem
     * @return self
     */
    public function setSkidataItem(array $skidataItem)
    {
        $this->skidataItem = $skidataItem;
        return $this;
    }
}

