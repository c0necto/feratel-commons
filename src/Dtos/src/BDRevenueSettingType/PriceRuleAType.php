<?php

namespace Conecto\FeratelDsi\Dtos\BDRevenueSettingType;

/**
 * Class representing PriceRuleAType
 */
class PriceRuleAType
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
     * @var bool $showOnWeb
     */
    private $showOnWeb = null;

    public function __construct(string $calcRule = null, float $value = null, bool $showOnWeb = null)
    {
        $this->calcRule = $calcRule;
        $this->value = $value;
        $this->showOnWeb = $showOnWeb;
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
     * Gets as showOnWeb
     *
     * @return bool
     */
    public function getShowOnWeb()
    {
        return $this->showOnWeb;
    }

    /**
     * Sets a new showOnWeb
     *
     * @param bool $showOnWeb
     * @return self
     */
    public function setShowOnWeb($showOnWeb)
    {
        $this->showOnWeb = $showOnWeb;
        return $this;
    }
}

