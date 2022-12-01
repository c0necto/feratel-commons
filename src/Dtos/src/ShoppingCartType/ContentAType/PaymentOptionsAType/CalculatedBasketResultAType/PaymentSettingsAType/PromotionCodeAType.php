<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType;

/**
 * Class representing PromotionCodeAType
 */
class PromotionCodeAType
{
    /**
     * @var bool $isPossibleToApplyCode
     */
    private $isPossibleToApplyCode = null;

    /**
     * @var string $appliedCode
     */
    private $appliedCode = null;

    public function __construct(bool $isPossibleToApplyCode = null, string $appliedCode = null)
    {
        $this->isPossibleToApplyCode = $isPossibleToApplyCode;
        $this->appliedCode = $appliedCode;
    }

    /**
     * Gets as isPossibleToApplyCode
     *
     * @return bool
     */
    public function getIsPossibleToApplyCode()
    {
        return $this->isPossibleToApplyCode;
    }

    /**
     * Sets a new isPossibleToApplyCode
     *
     * @param bool $isPossibleToApplyCode
     * @return self
     */
    public function setIsPossibleToApplyCode($isPossibleToApplyCode)
    {
        $this->isPossibleToApplyCode = $isPossibleToApplyCode;
        return $this;
    }

    /**
     * Gets as appliedCode
     *
     * @return string
     */
    public function getAppliedCode()
    {
        return $this->appliedCode;
    }

    /**
     * Sets a new appliedCode
     *
     * @param string $appliedCode
     * @return self
     */
    public function setAppliedCode($appliedCode)
    {
        $this->appliedCode = $appliedCode;
        return $this;
    }
}

