<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageAssignedProductListType
 *
 *
 * XSD Type: BDPackageAssignedProductList
 */
class BDPackageAssignedProductListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageAssignedProductItemType[] $assignedProduct
     */
    private $assignedProduct = [
        
    ];

    public function __construct(array $assignedProduct = null)
    {
        $this->assignedProduct = $assignedProduct;
    }

    /**
     * Adds as assignedProduct
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageAssignedProductItemType $assignedProduct
     */
    public function addToAssignedProduct(\Conecto\FeratelDsi\Dtos\BDPackageAssignedProductItemType $assignedProduct)
    {
        $this->assignedProduct[] = $assignedProduct;
        return $this;
    }

    /**
     * isset assignedProduct
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignedProduct($index)
    {
        return isset($this->assignedProduct[$index]);
    }

    /**
     * unset assignedProduct
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignedProduct($index)
    {
        unset($this->assignedProduct[$index]);
    }

    /**
     * Gets as assignedProduct
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageAssignedProductItemType[]
     */
    public function getAssignedProduct()
    {
        return $this->assignedProduct;
    }

    /**
     * Sets a new assignedProduct
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageAssignedProductItemType[] $assignedProduct
     * @return self
     */
    public function setAssignedProduct(array $assignedProduct)
    {
        $this->assignedProduct = $assignedProduct;
        return $this;
    }
}

