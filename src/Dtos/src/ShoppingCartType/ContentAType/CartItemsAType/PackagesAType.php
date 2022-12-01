<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType;

/**
 * Class representing PackagesAType
 */
class PackagesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType[] $packageItem
     */
    private $packageItem = [
        
    ];

    public function __construct(array $packageItem = null)
    {
        $this->packageItem = $packageItem;
    }

    /**
     * Adds as packageItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType $packageItem
     */
    public function addToPackageItem(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType $packageItem)
    {
        $this->packageItem[] = $packageItem;
        return $this;
    }

    /**
     * isset packageItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageItem($index)
    {
        return isset($this->packageItem[$index]);
    }

    /**
     * unset packageItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageItem($index)
    {
        unset($this->packageItem[$index]);
    }

    /**
     * Gets as packageItem
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType[]
     */
    public function getPackageItem()
    {
        return $this->packageItem;
    }

    /**
     * Sets a new packageItem
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType[] $packageItem
     * @return self
     */
    public function setPackageItem(array $packageItem = null)
    {
        $this->packageItem = $packageItem;
        return $this;
    }
}

