<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType;

/**
 * Class representing TransactionTypeAType
 */
class TransactionTypeAType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var int $validForHours
     */
    private $validForHours = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
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
     * Gets as validForHours
     *
     * @return int
     */
    public function getValidForHours()
    {
        return $this->validForHours;
    }

    /**
     * Sets a new validForHours
     *
     * @param int $validForHours
     * @return self
     */
    public function setValidForHours($validForHours)
    {
        $this->validForHours = $validForHours;
        return $this;
    }
}

