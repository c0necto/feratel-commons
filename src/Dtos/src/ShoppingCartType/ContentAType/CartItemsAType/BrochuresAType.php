<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType;

/**
 * Class representing BrochuresAType
 */
class BrochuresAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType[] $brochureItem
     */
    private $brochureItem = [
        
    ];

    public function __construct(array $brochureItem = null)
    {
        $this->brochureItem = $brochureItem;
    }

    /**
     * Adds as brochureItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType $brochureItem
     */
    public function addToBrochureItem(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType $brochureItem)
    {
        $this->brochureItem[] = $brochureItem;
        return $this;
    }

    /**
     * isset brochureItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrochureItem($index)
    {
        return isset($this->brochureItem[$index]);
    }

    /**
     * unset brochureItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrochureItem($index)
    {
        unset($this->brochureItem[$index]);
    }

    /**
     * Gets as brochureItem
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType[]
     */
    public function getBrochureItem()
    {
        return $this->brochureItem;
    }

    /**
     * Sets a new brochureItem
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType[] $brochureItem
     * @return self
     */
    public function setBrochureItem(array $brochureItem = null)
    {
        $this->brochureItem = $brochureItem;
        return $this;
    }
}

