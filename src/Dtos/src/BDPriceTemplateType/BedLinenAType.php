<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplateType;

/**
 * Class representing BedLinenAType
 */
class BedLinenAType
{
    /**
     * @var string $calcRule
     */
    private $calcRule = null;

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    public function __construct(string $calcRule = null, float $value = null, int $nights = null)
    {
        $this->calcRule = $calcRule;
        $this->value = $value;
        $this->nights = $nights;
    }

    /**
     * Gets as calcRule
     *
     * @return string
     */
    public function getCalcRule()
    {
        return $this->calcRule;
    }

    /**
     * Sets a new calcRule
     *
     * @param string $calcRule
     * @return self
     */
    public function setCalcRule($calcRule)
    {
        $this->calcRule = $calcRule;
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
}

