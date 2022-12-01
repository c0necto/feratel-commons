<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType;

/**
 * Class representing CartItemsAType
 */
class CartItemsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType[] $accommodations
     */
    private $accommodations = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType[] $additionalServices
     */
    private $additionalServices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType[] $brochures
     */
    private $brochures = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType[] $shopArticles
     */
    private $shopArticles = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType[] $packages
     */
    private $packages = null;

    public function __construct(array $accommodations = null, array $additionalServices = null, array $brochures = null, array $shopArticles = null, array $packages = null)
    {
        $this->accommodations = $accommodations;
        $this->additionalServices = $additionalServices;
        $this->brochures = $brochures;
        $this->shopArticles = $shopArticles;
        $this->packages = $packages;
    }

    /**
     * Adds as accommodationItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType $accommodationItem
     */
    public function addToAccommodations(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType $accommodationItem)
    {
        $this->accommodations[] = $accommodationItem;
        return $this;
    }

    /**
     * isset accommodations
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccommodations($index)
    {
        return isset($this->accommodations[$index]);
    }

    /**
     * unset accommodations
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccommodations($index)
    {
        unset($this->accommodations[$index]);
    }

    /**
     * Gets as accommodations
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType[]
     */
    public function getAccommodations()
    {
        return $this->accommodations;
    }

    /**
     * Sets a new accommodations
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType[] $accommodations
     * @return self
     */
    public function setAccommodations(array $accommodations)
    {
        $this->accommodations = $accommodations;
        return $this;
    }

    /**
     * Adds as additionalServiceItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType $additionalServiceItem
     */
    public function addToAdditionalServices(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType $additionalServiceItem)
    {
        $this->additionalServices[] = $additionalServiceItem;
        return $this;
    }

    /**
     * isset additionalServices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalServices($index)
    {
        return isset($this->additionalServices[$index]);
    }

    /**
     * unset additionalServices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalServices($index)
    {
        unset($this->additionalServices[$index]);
    }

    /**
     * Gets as additionalServices
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType[]
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Sets a new additionalServices
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType[] $additionalServices
     * @return self
     */
    public function setAdditionalServices(array $additionalServices)
    {
        $this->additionalServices = $additionalServices;
        return $this;
    }

    /**
     * Adds as brochureItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType $brochureItem
     */
    public function addToBrochures(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType $brochureItem)
    {
        $this->brochures[] = $brochureItem;
        return $this;
    }

    /**
     * isset brochures
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrochures($index)
    {
        return isset($this->brochures[$index]);
    }

    /**
     * unset brochures
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrochures($index)
    {
        unset($this->brochures[$index]);
    }

    /**
     * Gets as brochures
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType[]
     */
    public function getBrochures()
    {
        return $this->brochures;
    }

    /**
     * Sets a new brochures
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\BrochuresAType\BrochureItemAType[] $brochures
     * @return self
     */
    public function setBrochures(array $brochures)
    {
        $this->brochures = $brochures;
        return $this;
    }

    /**
     * Adds as shopArticleItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType $shopArticleItem
     */
    public function addToShopArticles(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType $shopArticleItem)
    {
        $this->shopArticles[] = $shopArticleItem;
        return $this;
    }

    /**
     * isset shopArticles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShopArticles($index)
    {
        return isset($this->shopArticles[$index]);
    }

    /**
     * unset shopArticles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShopArticles($index)
    {
        unset($this->shopArticles[$index]);
    }

    /**
     * Gets as shopArticles
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType[]
     */
    public function getShopArticles()
    {
        return $this->shopArticles;
    }

    /**
     * Sets a new shopArticles
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\ShopArticlesAType\ShopArticleItemAType[] $shopArticles
     * @return self
     */
    public function setShopArticles(array $shopArticles = null)
    {
        $this->shopArticles = $shopArticles;
        return $this;
    }

    /**
     * Adds as packageItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType $packageItem
     */
    public function addToPackages(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType $packageItem)
    {
        $this->packages[] = $packageItem;
        return $this;
    }

    /**
     * isset packages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackages($index)
    {
        return isset($this->packages[$index]);
    }

    /**
     * unset packages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackages($index)
    {
        unset($this->packages[$index]);
    }

    /**
     * Gets as packages
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Sets a new packages
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType[] $packages
     * @return self
     */
    public function setPackages(array $packages)
    {
        $this->packages = $packages;
        return $this;
    }
}

