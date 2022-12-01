<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType;

/**
 * Class representing BrochureItemAType
 */
class BrochureItemAType
{
    /**
     * @var string $shopItemId
     */
    private $shopItemId = null;

    /**
     * @var string $shoppingCartItemId
     */
    private $shoppingCartItemId = null;

    /**
     * @var string $itemName
     */
    private $itemName = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType\VariationAType $variation
     */
    private $variation = null;

    /**
     * @var int $weight
     */
    private $weight = null;

    public function __construct(string $shopItemId = null, string $shoppingCartItemId = null, string $itemName = null, string $type = null, int $numberOfItems = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType\VariationAType $variation = null, int $weight = null)
    {
        $this->shopItemId = $shopItemId;
        $this->shoppingCartItemId = $shoppingCartItemId;
        $this->itemName = $itemName;
        $this->type = $type;
        $this->numberOfItems = $numberOfItems;
        $this->variation = $variation;
        $this->weight = $weight;
    }

    /**
     * Gets as shopItemId
     *
     * @return string
     */
    public function getShopItemId()
    {
        return $this->shopItemId;
    }

    /**
     * Sets a new shopItemId
     *
     * @param string $shopItemId
     * @return self
     */
    public function setShopItemId($shopItemId)
    {
        $this->shopItemId = $shopItemId;
        return $this;
    }

    /**
     * Gets as shoppingCartItemId
     *
     * @return string
     */
    public function getShoppingCartItemId()
    {
        return $this->shoppingCartItemId;
    }

    /**
     * Sets a new shoppingCartItemId
     *
     * @param string $shoppingCartItemId
     * @return self
     */
    public function setShoppingCartItemId($shoppingCartItemId)
    {
        $this->shoppingCartItemId = $shoppingCartItemId;
        return $this;
    }

    /**
     * Gets as itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Sets a new itemName
     *
     * @param string $itemName
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
        return $this;
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
     * Gets as numberOfItems
     *
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * Sets a new numberOfItems
     *
     * @param int $numberOfItems
     * @return self
     */
    public function setNumberOfItems($numberOfItems)
    {
        $this->numberOfItems = $numberOfItems;
        return $this;
    }

    /**
     * Gets as variation
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType\VariationAType
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Sets a new variation
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType\VariationAType $variation
     * @return self
     */
    public function setVariation(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType\VariationAType $variation)
    {
        $this->variation = $variation;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
}

