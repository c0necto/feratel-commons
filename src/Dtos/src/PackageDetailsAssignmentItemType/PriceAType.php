<?php

namespace Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\AdultsAType $adults
     */
    private $adults = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[] $children
     */
    private $children = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\TotalAType $total
     */
    private $total = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\AdultsAType $adults = null, array $children = null, \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\TotalAType $total = null)
    {
        $this->adults = $adults;
        $this->children = $children;
        $this->total = $total;
    }

    /**
     * Gets as adults
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\AdultsAType
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * Sets a new adults
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\AdultsAType $adults
     * @return self
     */
    public function setAdults(\Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\AdultsAType $adults)
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * Adds as priceChild
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType $priceChild
     */
    public function addToChildren(\Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType $priceChild)
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
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[] $children
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
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\TotalAType $total
     * @return self
     */
    public function setTotal(\Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\TotalAType $total)
    {
        $this->total = $total;
        return $this;
    }
}

