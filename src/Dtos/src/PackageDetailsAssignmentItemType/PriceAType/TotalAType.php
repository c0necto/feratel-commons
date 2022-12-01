<?php

namespace Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType\PriceAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{
    /**
     * @var float $additionalNight
     */
    private $additionalNight = null;

    /**
     * @var float $adult
     */
    private $adult = null;

    /**
     * @var float $children
     */
    private $children = null;

    /**
     * @var float $price
     */
    private $price = null;

    public function __construct(float $additionalNight = null, float $adult = null, float $children = null, float $price = null)
    {
        $this->additionalNight = $additionalNight;
        $this->adult = $adult;
        $this->children = $children;
        $this->price = $price;
    }

    /**
     * Gets as additionalNight
     *
     * @return float
     */
    public function getAdditionalNight()
    {
        return $this->additionalNight;
    }

    /**
     * Sets a new additionalNight
     *
     * @param float $additionalNight
     * @return self
     */
    public function setAdditionalNight($additionalNight)
    {
        $this->additionalNight = $additionalNight;
        return $this;
    }

    /**
     * Gets as adult
     *
     * @return float
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Sets a new adult
     *
     * @param float $adult
     * @return self
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;
        return $this;
    }

    /**
     * Gets as children
     *
     * @return float
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param float $children
     * @return self
     */
    public function setChildren($children)
    {
        $this->children = $children;
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

