<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDDeletedItemListType
 *
 *
 * XSD Type: BDDeletedItemList
 */
class BDDeletedItemListType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDeletedItemListType\ItemAType[] $item
     */
    private $item = [
        
    ];

    public function __construct(string $type = null, array $item = null)
    {
        $this->type = $type;
        $this->item = $item;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDDeletedItemListType\ItemAType $item
     */
    public function addToItem(\Conecto\FeratelDsi\Dtos\BDDeletedItemListType\ItemAType $item)
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
     * @return \Conecto\FeratelDsi\Dtos\BDDeletedItemListType\ItemAType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDeletedItemListType\ItemAType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}

