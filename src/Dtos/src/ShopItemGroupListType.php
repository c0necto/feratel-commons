<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ShopItemGroupListType
 *
 *
 * XSD Type: ShopItemGroupList
 */
class ShopItemGroupListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShopItemGroupType[] $shopItemGroup
     */
    private $shopItemGroup = [
        
    ];

    public function __construct(array $shopItemGroup = null)
    {
        $this->shopItemGroup = $shopItemGroup;
    }

    /**
     * Adds as shopItemGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShopItemGroupType $shopItemGroup
     */
    public function addToShopItemGroup(\Conecto\FeratelDsi\Dtos\ShopItemGroupType $shopItemGroup)
    {
        $this->shopItemGroup[] = $shopItemGroup;
        return $this;
    }

    /**
     * isset shopItemGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShopItemGroup($index)
    {
        return isset($this->shopItemGroup[$index]);
    }

    /**
     * unset shopItemGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShopItemGroup($index)
    {
        unset($this->shopItemGroup[$index]);
    }

    /**
     * Gets as shopItemGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\ShopItemGroupType[]
     */
    public function getShopItemGroup()
    {
        return $this->shopItemGroup;
    }

    /**
     * Sets a new shopItemGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\ShopItemGroupType[] $shopItemGroup
     * @return self
     */
    public function setShopItemGroup(array $shopItemGroup = null)
    {
        $this->shopItemGroup = $shopItemGroup;
        return $this;
    }
}

