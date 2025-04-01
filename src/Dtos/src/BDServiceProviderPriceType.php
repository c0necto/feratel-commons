<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServiceProviderPriceType
 *
 *
 * XSD Type: BDServiceProviderPriceType
 */
class BDServiceProviderPriceType
{
    /**
     * @var int $from
     */
    private $from = null;

    /**
     * @var string $rule
     */
    private $rule = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    /**
     * @var string $standardMealCode
     */
    private $standardMealCode = null;

    public function __construct(int $from = null, string $rule = null, int $nights = null, string $standardMealCode = null)
    {
        $this->from = $from;
        $this->rule = $rule;
        $this->nights = $nights;
        $this->standardMealCode = $standardMealCode;
    }

    /**
     * Gets as from
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param int $from
     * @return self
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as rule
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * @param string $rule
     * @return self
     */
    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Gets as nights
     *
     * @return int
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Sets a new nights
     *
     * @param int $nights
     * @return self
     */
    public function setNights($nights)
    {
        $this->nights = $nights;
        return $this;
    }

    /**
     * Gets as standardMealCode
     *
     * @return string
     */
    public function getStandardMealCode()
    {
        return $this->standardMealCode;
    }

    /**
     * Sets a new standardMealCode
     *
     * @param string $standardMealCode
     * @return self
     */
    public function setStandardMealCode($standardMealCode)
    {
        $this->standardMealCode = $standardMealCode;
        return $this;
    }
}

