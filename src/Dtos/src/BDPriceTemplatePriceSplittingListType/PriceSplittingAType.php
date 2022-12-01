<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplatePriceSplittingListType;

/**
 * Class representing PriceSplittingAType
 */
class PriceSplittingAType
{
    /**
     * @var int $stay
     */
    private $stay = null;

    /**
     * @var int $pay
     */
    private $pay = null;

    public function __construct(int $stay = null, int $pay = null)
    {
        $this->stay = $stay;
        $this->pay = $pay;
    }

    /**
     * Gets as stay
     *
     * @return int
     */
    public function getStay()
    {
        return $this->stay;
    }

    /**
     * Sets a new stay
     *
     * @param int $stay
     * @return self
     */
    public function setStay($stay)
    {
        $this->stay = $stay;
        return $this;
    }

    /**
     * Gets as pay
     *
     * @return int
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * Sets a new pay
     *
     * @param int $pay
     * @return self
     */
    public function setPay($pay)
    {
        $this->pay = $pay;
        return $this;
    }
}

