<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingOptionsType
 *
 *
 * XSD Type: BookingOptionsType
 */
class BookingOptionsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketCalculationType $basketCalculation
     */
    private $basketCalculation = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasketCalculationType $basketCalculation = null)
    {
        $this->basketCalculation = $basketCalculation;
    }

    /**
     * Gets as basketCalculation
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketCalculationType
     */
    public function getBasketCalculation()
    {
        return $this->basketCalculation;
    }

    /**
     * Sets a new basketCalculation
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketCalculationType $basketCalculation
     * @return self
     */
    public function setBasketCalculation(\Conecto\FeratelDsi\Dtos\BasketCalculationType $basketCalculation)
    {
        $this->basketCalculation = $basketCalculation;
        return $this;
    }
}

