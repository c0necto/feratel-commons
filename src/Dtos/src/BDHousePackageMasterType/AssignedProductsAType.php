<?php

namespace Conecto\FeratelDsi\Dtos\BDHousePackageMasterType;

/**
 * Class representing AssignedProductsAType
 */
class AssignedProductsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType[] $assignedProduct
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
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType $assignedProduct
     */
    public function addToAssignedProduct(\Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType $assignedProduct)
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
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType[]
     */
    public function getAssignedProduct()
    {
        return $this->assignedProduct;
    }

    /**
     * Sets a new assignedProduct
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType\AssignedProductsAType\AssignedProductAType[] $assignedProduct
     * @return self
     */
    public function setAssignedProduct(array $assignedProduct = null)
    {
        $this->assignedProduct = $assignedProduct;
        return $this;
    }
}

