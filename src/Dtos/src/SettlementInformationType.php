<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SettlementInformationType
 *
 *
 * XSD Type: SettlementInformationType
 */
class SettlementInformationType
{
    /**
     * @var bool $includeMeal
     */
    private $includeMeal = null;

    /**
     * @var bool $includeExtra
     */
    private $includeExtra = null;

    /**
     * @var bool $includeVT
     */
    private $includeVT = null;

    /**
     * @var bool $exclVAT
     */
    private $exclVAT = null;

    public function __construct(bool $includeMeal = null, bool $includeExtra = null, bool $includeVT = null, bool $exclVAT = null)
    {
        $this->includeMeal = $includeMeal;
        $this->includeExtra = $includeExtra;
        $this->includeVT = $includeVT;
        $this->exclVAT = $exclVAT;
    }

    /**
     * Gets as includeMeal
     *
     * @return bool
     */
    public function getIncludeMeal()
    {
        return $this->includeMeal;
    }

    /**
     * Sets a new includeMeal
     *
     * @param bool $includeMeal
     * @return self
     */
    public function setIncludeMeal($includeMeal)
    {
        $this->includeMeal = $includeMeal;
        return $this;
    }

    /**
     * Gets as includeExtra
     *
     * @return bool
     */
    public function getIncludeExtra()
    {
        return $this->includeExtra;
    }

    /**
     * Sets a new includeExtra
     *
     * @param bool $includeExtra
     * @return self
     */
    public function setIncludeExtra($includeExtra)
    {
        $this->includeExtra = $includeExtra;
        return $this;
    }

    /**
     * Gets as includeVT
     *
     * @return bool
     */
    public function getIncludeVT()
    {
        return $this->includeVT;
    }

    /**
     * Sets a new includeVT
     *
     * @param bool $includeVT
     * @return self
     */
    public function setIncludeVT($includeVT)
    {
        $this->includeVT = $includeVT;
        return $this;
    }

    /**
     * Gets as exclVAT
     *
     * @return bool
     */
    public function getExclVAT()
    {
        return $this->exclVAT;
    }

    /**
     * Sets a new exclVAT
     *
     * @param bool $exclVAT
     * @return self
     */
    public function setExclVAT($exclVAT)
    {
        $this->exclVAT = $exclVAT;
        return $this;
    }
}

