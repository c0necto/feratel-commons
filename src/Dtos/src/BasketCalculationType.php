<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasketCalculationType
 *
 *
 * XSD Type: BasketCalculationType
 */
class BasketCalculationType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryType $basketSummary
     */
    private $basketSummary = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasketSummaryType $basketSummary = null)
    {
        $this->basketSummary = $basketSummary;
    }

    /**
     * Gets as basketSummary
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryType
     */
    public function getBasketSummary()
    {
        return $this->basketSummary;
    }

    /**
     * Sets a new basketSummary
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryType $basketSummary
     * @return self
     */
    public function setBasketSummary(\Conecto\FeratelDsi\Dtos\BasketSummaryType $basketSummary)
    {
        $this->basketSummary = $basketSummary;
        return $this;
    }
}

