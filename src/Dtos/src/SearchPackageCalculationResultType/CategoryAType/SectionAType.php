<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType;

/**
 * Class representing SectionAType
 */
class SectionAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var float $totalPrice
     */
    private $totalPrice = null;

    public function __construct(string $id = null, float $totalPrice = null)
    {
        $this->id = $id;
        $this->totalPrice = $totalPrice;
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
     * Gets as totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Sets a new totalPrice
     *
     * @param float $totalPrice
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }
}

