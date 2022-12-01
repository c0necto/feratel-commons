<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDShopItemListType
 *
 *
 * XSD Type: BDShopItemList
 */
class BDShopItemListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDShopItemItemType[] $shopItem
     */
    private $shopItem = [
        
    ];

    public function __construct(array $shopItem = null)
    {
        $this->shopItem = $shopItem;
    }

    /**
     * Adds as shopItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDShopItemItemType $shopItem
     */
    public function addToShopItem(\Conecto\FeratelDsi\Dtos\BDShopItemItemType $shopItem)
    {
        $this->shopItem[] = $shopItem;
        return $this;
    }

    /**
     * isset shopItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShopItem($index)
    {
        return isset($this->shopItem[$index]);
    }

    /**
     * unset shopItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShopItem($index)
    {
        unset($this->shopItem[$index]);
    }

    /**
     * Gets as shopItem
     *
     * @return \Conecto\FeratelDsi\Dtos\BDShopItemItemType[]
     */
    public function getShopItem()
    {
        return $this->shopItem;
    }

    /**
     * Sets a new shopItem
     *
     * @param \Conecto\FeratelDsi\Dtos\BDShopItemItemType[] $shopItem
     * @return self
     */
    public function setShopItem(array $shopItem)
    {
        $this->shopItem = $shopItem;
        return $this;
    }
}

