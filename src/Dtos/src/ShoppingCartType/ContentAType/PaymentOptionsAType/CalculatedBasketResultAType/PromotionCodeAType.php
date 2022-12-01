<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType;

/**
 * Class representing PromotionCodeAType
 */
class PromotionCodeAType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var string $calcRule
     */
    private $calcRule = null;

    /**
     * @var float $originalTotalAmount
     */
    private $originalTotalAmount = null;

    public function __construct(string $name = null, float $value = null, string $calcRule = null, float $originalTotalAmount = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->calcRule = $calcRule;
        $this->originalTotalAmount = $originalTotalAmount;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Gets as originalTotalAmount
     *
     * @return float
     */
    public function getOriginalTotalAmount()
    {
        return $this->originalTotalAmount;
    }

    /**
     * Sets a new originalTotalAmount
     *
     * @param float $originalTotalAmount
     * @return self
     */
    public function setOriginalTotalAmount($originalTotalAmount)
    {
        $this->originalTotalAmount = $originalTotalAmount;
        return $this;
    }
}

