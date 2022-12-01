<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HotSpotListType
 *
 *
 * XSD Type: HotSpotList
 */
class HotSpotListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType[] $item
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
     * @param \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType $item
     */
    public function addToItem(\Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType $item)
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
     * @return \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotListType\ItemAType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }
}

