<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageProductItemType
 *
 *
 * XSD Type: BDPackageProductItem
 */
class BDPackageProductItemType
{
    /**
     * @var string $serviceProviderId
     */
    private $serviceProviderId = null;

    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var string $productType
     */
    private $productType = null;

    /**
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * @var bool $preSelected
     */
    private $preSelected = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageProductAvailabilityListType $availabilities
     */
    private $availabilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageProductPriceListType $prices
     */
    private $prices = null;

    public function __construct(string $serviceProviderId = null, string $productId = null, string $productType = null, string $categoryId = null, bool $preSelected = null, \Conecto\FeratelDsi\Dtos\BDPackageProductAvailabilityListType $availabilities = null, \Conecto\FeratelDsi\Dtos\BDPackageProductPriceListType $prices = null)
    {
        $this->serviceProviderId = $serviceProviderId;
        $this->productId = $productId;
        $this->productType = $productType;
        $this->categoryId = $categoryId;
        $this->preSelected = $preSelected;
        $this->availabilities = $availabilities;
        $this->prices = $prices;
    }

    /**
     * Gets as serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Sets a new serviceProviderId
     *
     * @param string $serviceProviderId
     * @return self
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Gets as productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * @param string $productId
     * @return self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Gets as categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * Gets as preSelected
     *
     * @return bool
     */
    public function getPreSelected()
    {
        return $this->preSelected;
    }

    /**
     * Sets a new preSelected
     *
     * @param bool $preSelected
     * @return self
     */
    public function setPreSelected($preSelected)
    {
        $this->preSelected = $preSelected;
        return $this;
    }

    /**
     * Gets as availabilities
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageProductAvailabilityListType
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Sets a new availabilities
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageProductAvailabilityListType $availabilities
     * @return self
     */
    public function setAvailabilities(?\Conecto\FeratelDsi\Dtos\BDPackageProductAvailabilityListType $availabilities = null)
    {
        $this->availabilities = $availabilities;
        return $this;
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageProductPriceListType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageProductPriceListType $prices
     * @return self
     */
    public function setPrices(?\Conecto\FeratelDsi\Dtos\BDPackageProductPriceListType $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }
}

