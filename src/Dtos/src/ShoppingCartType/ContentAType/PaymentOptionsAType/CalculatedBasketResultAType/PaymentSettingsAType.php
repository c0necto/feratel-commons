<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType;

/**
 * Class representing PaymentSettingsAType
 */
class PaymentSettingsAType
{
    /**
     * @var bool $useCancellationInsurance
     */
    private $useCancellationInsurance = null;

    /**
     * @var bool $cancellationInsuranceChecked
     */
    private $cancellationInsuranceChecked = null;

    /**
     * @var bool $useBookingFee
     */
    private $useBookingFee = null;

    /**
     * @var bool $isOnlyGuarantee
     */
    private $isOnlyGuarantee = null;

    /**
     * @var bool $settlerIsTourOperator
     */
    private $settlerIsTourOperator = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType\PromotionCodeAType $promotionCode
     */
    private $promotionCode = null;

    public function __construct(bool $useCancellationInsurance = null, bool $cancellationInsuranceChecked = null, bool $useBookingFee = null, bool $isOnlyGuarantee = null, bool $settlerIsTourOperator = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType\PromotionCodeAType $promotionCode = null)
    {
        $this->useCancellationInsurance = $useCancellationInsurance;
        $this->cancellationInsuranceChecked = $cancellationInsuranceChecked;
        $this->useBookingFee = $useBookingFee;
        $this->isOnlyGuarantee = $isOnlyGuarantee;
        $this->settlerIsTourOperator = $settlerIsTourOperator;
        $this->promotionCode = $promotionCode;
    }

    /**
     * Gets as useCancellationInsurance
     *
     * @return bool
     */
    public function getUseCancellationInsurance()
    {
        return $this->useCancellationInsurance;
    }

    /**
     * Sets a new useCancellationInsurance
     *
     * @param bool $useCancellationInsurance
     * @return self
     */
    public function setUseCancellationInsurance($useCancellationInsurance)
    {
        $this->useCancellationInsurance = $useCancellationInsurance;
        return $this;
    }

    /**
     * Gets as cancellationInsuranceChecked
     *
     * @return bool
     */
    public function getCancellationInsuranceChecked()
    {
        return $this->cancellationInsuranceChecked;
    }

    /**
     * Sets a new cancellationInsuranceChecked
     *
     * @param bool $cancellationInsuranceChecked
     * @return self
     */
    public function setCancellationInsuranceChecked($cancellationInsuranceChecked)
    {
        $this->cancellationInsuranceChecked = $cancellationInsuranceChecked;
        return $this;
    }

    /**
     * Gets as useBookingFee
     *
     * @return bool
     */
    public function getUseBookingFee()
    {
        return $this->useBookingFee;
    }

    /**
     * Sets a new useBookingFee
     *
     * @param bool $useBookingFee
     * @return self
     */
    public function setUseBookingFee($useBookingFee)
    {
        $this->useBookingFee = $useBookingFee;
        return $this;
    }

    /**
     * Gets as isOnlyGuarantee
     *
     * @return bool
     */
    public function getIsOnlyGuarantee()
    {
        return $this->isOnlyGuarantee;
    }

    /**
     * Sets a new isOnlyGuarantee
     *
     * @param bool $isOnlyGuarantee
     * @return self
     */
    public function setIsOnlyGuarantee($isOnlyGuarantee)
    {
        $this->isOnlyGuarantee = $isOnlyGuarantee;
        return $this;
    }

    /**
     * Gets as settlerIsTourOperator
     *
     * @return bool
     */
    public function getSettlerIsTourOperator()
    {
        return $this->settlerIsTourOperator;
    }

    /**
     * Sets a new settlerIsTourOperator
     *
     * @param bool $settlerIsTourOperator
     * @return self
     */
    public function setSettlerIsTourOperator($settlerIsTourOperator)
    {
        $this->settlerIsTourOperator = $settlerIsTourOperator;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType\PromotionCodeAType
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType\PromotionCodeAType $promotionCode
     * @return self
     */
    public function setPromotionCode(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType\PromotionCodeAType $promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }
}

