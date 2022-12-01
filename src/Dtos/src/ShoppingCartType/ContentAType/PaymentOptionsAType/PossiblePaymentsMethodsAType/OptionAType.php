<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\PossiblePaymentsMethodsAType;

/**
 * Class representing OptionAType
 */
class OptionAType
{
    /**
     * @var string $transactionPrePaymentMethod
     */
    private $transactionPrePaymentMethod = null;

    /**
     * @var string $transactionFinalPaymentMethod
     */
    private $transactionFinalPaymentMethod = null;

    /**
     * @var string $transactionGuaranteePaymentMethod
     */
    private $transactionGuaranteePaymentMethod = null;

    public function __construct(string $transactionPrePaymentMethod = null, string $transactionFinalPaymentMethod = null, string $transactionGuaranteePaymentMethod = null)
    {
        $this->transactionPrePaymentMethod = $transactionPrePaymentMethod;
        $this->transactionFinalPaymentMethod = $transactionFinalPaymentMethod;
        $this->transactionGuaranteePaymentMethod = $transactionGuaranteePaymentMethod;
    }

    /**
     * Gets as transactionPrePaymentMethod
     *
     * @return string
     */
    public function getTransactionPrePaymentMethod()
    {
        return $this->transactionPrePaymentMethod;
    }

    /**
     * Sets a new transactionPrePaymentMethod
     *
     * @param string $transactionPrePaymentMethod
     * @return self
     */
    public function setTransactionPrePaymentMethod($transactionPrePaymentMethod)
    {
        $this->transactionPrePaymentMethod = $transactionPrePaymentMethod;
        return $this;
    }

    /**
     * Gets as transactionFinalPaymentMethod
     *
     * @return string
     */
    public function getTransactionFinalPaymentMethod()
    {
        return $this->transactionFinalPaymentMethod;
    }

    /**
     * Sets a new transactionFinalPaymentMethod
     *
     * @param string $transactionFinalPaymentMethod
     * @return self
     */
    public function setTransactionFinalPaymentMethod($transactionFinalPaymentMethod)
    {
        $this->transactionFinalPaymentMethod = $transactionFinalPaymentMethod;
        return $this;
    }

    /**
     * Gets as transactionGuaranteePaymentMethod
     *
     * @return string
     */
    public function getTransactionGuaranteePaymentMethod()
    {
        return $this->transactionGuaranteePaymentMethod;
    }

    /**
     * Sets a new transactionGuaranteePaymentMethod
     *
     * @param string $transactionGuaranteePaymentMethod
     * @return self
     */
    public function setTransactionGuaranteePaymentMethod($transactionGuaranteePaymentMethod)
    {
        $this->transactionGuaranteePaymentMethod = $transactionGuaranteePaymentMethod;
        return $this;
    }
}

