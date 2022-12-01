<?php

namespace Conecto\FeratelDsi\Dtos\BDPackageDetailsType;

/**
 * Class representing BookableAType
 */
class BookableAType
{
    /**
     * @var bool $__value
     */
    private $__value = null;

    /**
     * @var int $daysBookingStops
     */
    private $daysBookingStops = null;

    /**
     * Construct
     *
     * @param bool $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param bool $value
     * @return bool
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as daysBookingStops
     *
     * @return int
     */
    public function getDaysBookingStops()
    {
        return $this->daysBookingStops;
    }

    /**
     * Sets a new daysBookingStops
     *
     * @param int $daysBookingStops
     * @return self
     */
    public function setDaysBookingStops($daysBookingStops)
    {
        $this->daysBookingStops = $daysBookingStops;
        return $this;
    }
}

