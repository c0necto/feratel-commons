<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageAssignedProductItemType
 *
 *
 * XSD Type: BDPackageAssignedProductItem
 */
class BDPackageAssignedProductItemType
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
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * @var bool $preSelected
     */
    private $preSelected = null;

    public function __construct(string $serviceProviderId = null, string $productId = null, string $categoryId = null, bool $preSelected = null)
    {
        $this->serviceProviderId = $serviceProviderId;
        $this->productId = $productId;
        $this->categoryId = $categoryId;
        $this->preSelected = $preSelected;
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
}

