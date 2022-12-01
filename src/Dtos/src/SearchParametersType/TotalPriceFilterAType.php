<?php

namespace Conecto\FeratelDsi\Dtos\SearchParametersType;

/**
 * Class representing TotalPriceFilterAType
 */
class TotalPriceFilterAType
{
    /**
     * @var float $min
     */
    private $min = null;

    /**
     * @var float $max
     */
    private $max = null;

    public function __construct(float $min = null, float $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Gets as min
     *
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * @param float $min
     * @return self
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * @param float $max
     * @return self
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }
}

