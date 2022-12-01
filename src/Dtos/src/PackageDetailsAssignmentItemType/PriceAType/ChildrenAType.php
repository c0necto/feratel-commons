<?php

namespace Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType;

/**
 * Class representing ChildrenAType
 */
class ChildrenAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[] $priceChild
     */
    private $priceChild = [
        
    ];

    public function __construct(array $priceChild = null)
    {
        $this->priceChild = $priceChild;
    }

    /**
     * Adds as priceChild
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType $priceChild
     */
    public function addToPriceChild(\Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType $priceChild)
    {
        $this->priceChild[] = $priceChild;
        return $this;
    }

    /**
     * isset priceChild
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceChild($index)
    {
        return isset($this->priceChild[$index]);
    }

    /**
     * unset priceChild
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceChild($index)
    {
        unset($this->priceChild[$index]);
    }

    /**
     * Gets as priceChild
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[]
     */
    public function getPriceChild()
    {
        return $this->priceChild;
    }

    /**
     * Sets a new priceChild
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType\PriceChildAType[] $priceChild
     * @return self
     */
    public function setPriceChild(array $priceChild = null)
    {
        $this->priceChild = $priceChild;
        return $this;
    }
}

