<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType;

/**
 * Class representing DetailsAType
 */
class DetailsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType[] $packageProductItem
     */
    private $packageProductItem = [
        
    ];

    public function __construct(array $packageProductItem = null)
    {
        $this->packageProductItem = $packageProductItem;
    }

    /**
     * Adds as packageProductItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType $packageProductItem
     */
    public function addToPackageProductItem(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType $packageProductItem)
    {
        $this->packageProductItem[] = $packageProductItem;
        return $this;
    }

    /**
     * isset packageProductItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageProductItem($index)
    {
        return isset($this->packageProductItem[$index]);
    }

    /**
     * unset packageProductItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageProductItem($index)
    {
        unset($this->packageProductItem[$index]);
    }

    /**
     * Gets as packageProductItem
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType[]
     */
    public function getPackageProductItem()
    {
        return $this->packageProductItem;
    }

    /**
     * Sets a new packageProductItem
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType[] $packageProductItem
     * @return self
     */
    public function setPackageProductItem(array $packageProductItem)
    {
        $this->packageProductItem = $packageProductItem;
        return $this;
    }
}

