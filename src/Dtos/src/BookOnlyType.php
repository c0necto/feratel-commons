<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookOnlyType
 *
 *
 * XSD Type: BookOnlyType
 */
class BookOnlyType
{
    /**
     * @var int $__value
     */
    private $__value = null;

    /**
     * @var bool $includeOnlyOnRequest
     */
    private $includeOnlyOnRequest = null;

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
     * Gets as includeOnlyOnRequest
     *
     * @return bool
     */
    public function getIncludeOnlyOnRequest()
    {
        return $this->includeOnlyOnRequest;
    }

    /**
     * Sets a new includeOnlyOnRequest
     *
     * @param bool $includeOnlyOnRequest
     * @return self
     */
    public function setIncludeOnlyOnRequest($includeOnlyOnRequest)
    {
        $this->includeOnlyOnRequest = $includeOnlyOnRequest;
        return $this;
    }
}

