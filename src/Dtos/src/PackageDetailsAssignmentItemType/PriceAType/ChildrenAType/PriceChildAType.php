<?php

namespace Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType\ChildrenAType;

/**
 * Class representing PriceChildAType
 */
class PriceChildAType
{
    /**
     * @var int $age
     */
    private $age = null;

    /**
     * @var float $price
     */
    private $price = null;

    public function __construct(int $age = null, float $price = null)
    {
        $this->age = $age;
        $this->price = $price;
    }

    /**
     * Gets as age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * @param int $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

