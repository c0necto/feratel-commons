<?php

namespace Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType;

/**
 * Class representing FoodAndBeverageAType
 */
class FoodAndBeverageAType
{
    /**
     * @var float $priceFrom
     */
    private $priceFrom = null;

    /**
     * @var float $priceTo
     */
    private $priceTo = null;

    /**
     * @var int $seatsInside
     */
    private $seatsInside = null;

    /**
     * @var int $seatsOutside
     */
    private $seatsOutside = null;

    public function __construct(float $priceFrom = null, float $priceTo = null, int $seatsInside = null, int $seatsOutside = null)
    {
        $this->priceFrom = $priceFrom;
        $this->priceTo = $priceTo;
        $this->seatsInside = $seatsInside;
        $this->seatsOutside = $seatsOutside;
    }

    /**
     * Gets as priceFrom
     *
     * @return float
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * Sets a new priceFrom
     *
     * @param float $priceFrom
     * @return self
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }

    /**
     * Gets as priceTo
     *
     * @return float
     */
    public function getPriceTo()
    {
        return $this->priceTo;
    }

    /**
     * Sets a new priceTo
     *
     * @param float $priceTo
     * @return self
     */
    public function setPriceTo($priceTo)
    {
        $this->priceTo = $priceTo;
        return $this;
    }

    /**
     * Gets as seatsInside
     *
     * @return int
     */
    public function getSeatsInside()
    {
        return $this->seatsInside;
    }

    /**
     * Sets a new seatsInside
     *
     * @param int $seatsInside
     * @return self
     */
    public function setSeatsInside($seatsInside)
    {
        $this->seatsInside = $seatsInside;
        return $this;
    }

    /**
     * Gets as seatsOutside
     *
     * @return int
     */
    public function getSeatsOutside()
    {
        return $this->seatsOutside;
    }

    /**
     * Sets a new seatsOutside
     *
     * @param int $seatsOutside
     * @return self
     */
    public function setSeatsOutside($seatsOutside)
    {
        $this->seatsOutside = $seatsOutside;
        return $this;
    }
}

