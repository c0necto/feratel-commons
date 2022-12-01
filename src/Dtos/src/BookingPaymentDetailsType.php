<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingPaymentDetailsType
 *
 *
 * XSD Type: BookingPaymentDetails
 */
class BookingPaymentDetailsType
{
    /**
     * @var string $transactionGuaranteePaymentMethod
     */
    private $transactionGuaranteePaymentMethod = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $prePayment
     */
    private $prePayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $finalPayment
     */
    private $finalPayment = null;

    public function __construct(string $transactionGuaranteePaymentMethod = null, \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $prePayment = null, \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $finalPayment = null)
    {
        $this->transactionGuaranteePaymentMethod = $transactionGuaranteePaymentMethod;
        $this->prePayment = $prePayment;
        $this->finalPayment = $finalPayment;
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

    /**
     * Gets as prePayment
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType
     */
    public function getPrePayment()
    {
        return $this->prePayment;
    }

    /**
     * Sets a new prePayment
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $prePayment
     * @return self
     */
    public function setPrePayment(\Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $prePayment)
    {
        $this->prePayment = $prePayment;
        return $this;
    }

    /**
     * Gets as finalPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType
     */
    public function getFinalPayment()
    {
        return $this->finalPayment;
    }

    /**
     * Sets a new finalPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $finalPayment
     * @return self
     */
    public function setFinalPayment(\Conecto\FeratelDsi\Dtos\BookingPaymentDetailType $finalPayment)
    {
        $this->finalPayment = $finalPayment;
        return $this;
    }
}

