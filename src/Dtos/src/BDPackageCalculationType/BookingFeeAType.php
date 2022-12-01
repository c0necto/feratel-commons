<?php

namespace Conecto\FeratelDsi\Dtos\BDPackageCalculationType;

/**
 * Class representing BookingFeeAType
 */
class BookingFeeAType
{
    /**
     * @var bool $included
     */
    private $included = null;

    /**
     * @var float $value
     */
    private $value = null;

    public function __construct(bool $included = null, float $value = null)
    {
        $this->included = $included;
        $this->value = $value;
    }

    /**
     * Gets as included
     *
     * @return bool
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * Sets a new included
     *
     * @param bool $included
     * @return self
     */
    public function setIncluded($included)
    {
        $this->included = $included;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

