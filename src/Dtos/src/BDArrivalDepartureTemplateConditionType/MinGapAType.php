<?php

namespace Conecto\FeratelDsi\Dtos\BDArrivalDepartureTemplateConditionType;

/**
 * Class representing MinGapAType
 */
class MinGapAType
{
    /**
     * @var int $__value
     */
    private $__value = null;

    /**
     * @var bool $denyOnwardBooking
     */
    private $denyOnwardBooking = null;

    /**
     * Construct
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param int $value
     * @return int
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
     * Gets as denyOnwardBooking
     *
     * @return bool
     */
    public function getDenyOnwardBooking()
    {
        return $this->denyOnwardBooking;
    }

    /**
     * Sets a new denyOnwardBooking
     *
     * @param bool $denyOnwardBooking
     * @return self
     */
    public function setDenyOnwardBooking($denyOnwardBooking)
    {
        $this->denyOnwardBooking = $denyOnwardBooking;
        return $this;
    }
}

