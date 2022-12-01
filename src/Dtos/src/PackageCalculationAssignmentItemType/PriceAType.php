<?php

namespace Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[] $children
     */
    private $children = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\TotalAType $total
     */
    private $total = null;

    public function __construct(array $children = null, \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\TotalAType $total = null)
    {
        $this->children = $children;
        $this->total = $total;
    }

    /**
     * Adds as priceChild
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType $priceChild
     */
    public function addToChildren(\Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType $priceChild)
    {
        $this->children[] = $priceChild;
        return $this;
    }

    /**
     * isset children
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildren($index)
    {
        return isset($this->children[$index]);
    }

    /**
     * unset children
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildren($index)
    {
        unset($this->children[$index]);
    }

    /**
     * Gets as children
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[] $children
     * @return self
     */
    public function setChildren(array $children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * Gets as total
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\TotalAType $total
     * @return self
     */
    public function setTotal(\Conecto\FeratelDsi\Dtos\PackageCalculationAssignmentItemType\PriceAType\TotalAType $total)
    {
        $this->total = $total;
        return $this;
    }
}

