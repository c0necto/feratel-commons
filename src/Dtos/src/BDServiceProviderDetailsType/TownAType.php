<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType;

/**
 * Class representing TownAType
 */
class TownAType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $vTCode
     */
    private $vTCode = null;

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
     * Gets as vTCode
     *
     * @return string
     */
    public function getVTCode()
    {
        return $this->vTCode;
    }

    /**
     * Sets a new vTCode
     *
     * @param string $vTCode
     * @return self
     */
    public function setVTCode($vTCode)
    {
        $this->vTCode = $vTCode;
        return $this;
    }
}

