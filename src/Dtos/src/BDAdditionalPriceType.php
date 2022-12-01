<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalPriceType
 *
 *
 * XSD Type: BDAdditionalPriceType
 */
class BDAdditionalPriceType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceType\RangeAType $range
     */
    private $range = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BDAdditionalPriceType\RangeAType $range = null)
    {
        $this->range = $range;
    }

    /**
     * Gets as range
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceType\RangeAType
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceType\RangeAType $range
     * @return self
     */
    public function setRange(\Conecto\FeratelDsi\Dtos\BDAdditionalPriceType\RangeAType $range)
    {
        $this->range = $range;
        return $this;
    }
}

