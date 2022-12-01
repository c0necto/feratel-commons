<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType;

/**
 * Class representing ShopArticlesAType
 */
class ShopArticlesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType[] $shopArticleItem
     */
    private $shopArticleItem = [
        
    ];

    public function __construct(array $shopArticleItem = null)
    {
        $this->shopArticleItem = $shopArticleItem;
    }

    /**
     * Adds as shopArticleItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType $shopArticleItem
     */
    public function addToShopArticleItem(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType $shopArticleItem)
    {
        $this->shopArticleItem[] = $shopArticleItem;
        return $this;
    }

    /**
     * isset shopArticleItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShopArticleItem($index)
    {
        return isset($this->shopArticleItem[$index]);
    }

    /**
     * unset shopArticleItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShopArticleItem($index)
    {
        unset($this->shopArticleItem[$index]);
    }

    /**
     * Gets as shopArticleItem
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType[]
     */
    public function getShopArticleItem()
    {
        return $this->shopArticleItem;
    }

    /**
     * Sets a new shopArticleItem
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType[] $shopArticleItem
     * @return self
     */
    public function setShopArticleItem(array $shopArticleItem = null)
    {
        $this->shopArticleItem = $shopArticleItem;
        return $this;
    }
}

