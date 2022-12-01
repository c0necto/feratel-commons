<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CheckEffectUserType
 *
 *
 * XSD Type: CheckEffectUserType
 */
class CheckEffectUserType
{
    /**
     * @var string $cECode
     */
    private $cECode = null;

    public function __construct(string $cECode = null)
    {
        $this->cECode = $cECode;
    }

    /**
     * Gets as cECode
     *
     * @return string
     */
    public function getCECode()
    {
        return $this->cECode;
    }

    /**
     * Sets a new cECode
     *
     * @param string $cECode
     * @return self
     */
    public function setCECode($cECode)
    {
        $this->cECode = $cECode;
        return $this;
    }
}

