<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType;

/**
 * Class representing CalculatedBasketResultAType
 */
class CalculatedBasketResultAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentMethodsAType $paymentMethods
     */
    private $paymentMethods = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType $paymentSettings
     */
    private $paymentSettings = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType $payments
     */
    private $payments = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PromotionCodeAType $promotionCode
     */
    private $promotionCode = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentMethodsAType $paymentMethods = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType $paymentSettings = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType $payments = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PromotionCodeAType $promotionCode = null)
    {
        $this->paymentMethods = $paymentMethods;
        $this->paymentSettings = $paymentSettings;
        $this->payments = $payments;
        $this->promotionCode = $promotionCode;
    }

    /**
     * Gets as paymentMethods
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentMethodsAType
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentMethodsAType $paymentMethods
     * @return self
     */
    public function setPaymentMethods(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentMethodsAType $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * Gets as paymentSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType
     */
    public function getPaymentSettings()
    {
        return $this->paymentSettings;
    }

    /**
     * Sets a new paymentSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType $paymentSettings
     * @return self
     */
    public function setPaymentSettings(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentSettingsAType $paymentSettings)
    {
        $this->paymentSettings = $paymentSettings;
        return $this;
    }

    /**
     * Gets as payments
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Sets a new payments
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType $payments
     * @return self
     */
    public function setPayments(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType $payments)
    {
        $this->payments = $payments;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PromotionCodeAType
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PromotionCodeAType $promotionCode
     * @return self
     */
    public function setPromotionCode(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PromotionCodeAType $promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }
}

