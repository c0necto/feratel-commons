<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PackageCalculationAssignmentItemType
 *
 *
 * XSD Type: PackageCalculationAssignmentItem
 */
class PackageCalculationAssignmentItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $transactionDetailType
     */
    private $transactionDetailType = null;

    /**
     * @var string $parentId
     */
    private $parentId = null;

    /**
     * @var string $parentName
     */
    private $parentName = null;

    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var string $productName
     */
    private $productName = null;

    /**
     * @var string $providerTown
     */
    private $providerTown = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType $price
     */
    private $price = null;

    public function __construct(string $id = null, string $transactionDetailType = null, string $parentId = null, string $parentName = null, string $productId = null, string $productName = null, string $providerTown = null, \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType $price = null)
    {
        $this->id = $id;
        $this->transactionDetailType = $transactionDetailType;
        $this->parentId = $parentId;
        $this->parentName = $parentName;
        $this->productId = $productId;
        $this->productName = $productName;
        $this->providerTown = $providerTown;
        $this->price = $price;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as transactionDetailType
     *
     * @return string
     */
    public function getTransactionDetailType()
    {
        return $this->transactionDetailType;
    }

    /**
     * Sets a new transactionDetailType
     *
     * @param string $transactionDetailType
     * @return self
     */
    public function setTransactionDetailType($transactionDetailType)
    {
        $this->transactionDetailType = $transactionDetailType;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Gets as parentName
     *
     * @return string
     */
    public function getParentName()
    {
        return $this->parentName;
    }

    /**
     * Sets a new parentName
     *
     * @param string $parentName
     * @return self
     */
    public function setParentName($parentName)
    {
        $this->parentName = $parentName;
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
     * Gets as productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Gets as providerTown
     *
     * @return string
     */
    public function getProviderTown()
    {
        return $this->providerTown;
    }

    /**
     * Sets a new providerTown
     *
     * @param string $providerTown
     * @return self
     */
    public function setProviderTown($providerTown)
    {
        $this->providerTown = $providerTown;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType $price
     * @return self
     */
    public function setPrice(\Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType $price)
    {
        $this->price = $price;
        return $this;
    }
}

