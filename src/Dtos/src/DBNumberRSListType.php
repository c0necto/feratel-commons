<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DBNumberRSListType
 *
 *
 * XSD Type: DBNumberRSList
 */
class DBNumberRSListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\DBNumberItemType[] $item
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
     * @param \Conecto\FeratelDsi\Dtos\DBNumberItemType $item
     */
    public function addToItem(\Conecto\FeratelDsi\Dtos\DBNumberItemType $item)
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
     * @return \Conecto\FeratelDsi\Dtos\DBNumberItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Conecto\FeratelDsi\Dtos\DBNumberItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}

