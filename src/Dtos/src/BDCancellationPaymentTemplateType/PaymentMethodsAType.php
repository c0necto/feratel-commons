<?php

namespace Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType;

/**
 * Class representing PaymentMethodsAType
 */
class PaymentMethodsAType
{
    /**
     * @var int $invoicePossibleDays
     */
    private $invoicePossibleDays = null;

    /**
     * @var int $prePaymentUntil
     */
    private $prePaymentUntil = null;

    /**
     * @var int $finalPayment
     */
    private $finalPayment = null;

    /**
     * @var bool $invoice
     */
    private $invoice = null;

    /**
     * @var bool $creditCard
     */
    private $creditCard = null;

    /**
     * @var bool $eLV
     */
    private $eLV = null;

    /**
     * @var bool $payPal
     */
    private $payPal = null;

    /**
     * @var bool $tWINT
     */
    private $tWINT = null;

    /**
     * @var string $prePaymentDueRule
     */
    private $prePaymentDueRule = null;

    /**
     * @var bool $paymentLink
     */
    private $paymentLink = null;

    public function __construct(int $invoicePossibleDays = null, int $prePaymentUntil = null, int $finalPayment = null, bool $invoice = null, bool $creditCard = null, bool $eLV = null, bool $payPal = null, bool $tWINT = null, string $prePaymentDueRule = null, bool $paymentLink = null)
    {
        $this->invoicePossibleDays = $invoicePossibleDays;
        $this->prePaymentUntil = $prePaymentUntil;
        $this->finalPayment = $finalPayment;
        $this->invoice = $invoice;
        $this->creditCard = $creditCard;
        $this->eLV = $eLV;
        $this->payPal = $payPal;
        $this->tWINT = $tWINT;
        $this->prePaymentDueRule = $prePaymentDueRule;
        $this->paymentLink = $paymentLink;
    }

    /**
     * Gets as invoicePossibleDays
     *
     * @return int
     */
    public function getInvoicePossibleDays()
    {
        return $this->invoicePossibleDays;
    }

    /**
     * Sets a new invoicePossibleDays
     *
     * @param int $invoicePossibleDays
     * @return self
     */
    public function setInvoicePossibleDays($invoicePossibleDays)
    {
        $this->invoicePossibleDays = $invoicePossibleDays;
        return $this;
    }

    /**
     * Gets as prePaymentUntil
     *
     * @return int
     */
    public function getPrePaymentUntil()
    {
        return $this->prePaymentUntil;
    }

    /**
     * Sets a new prePaymentUntil
     *
     * @param int $prePaymentUntil
     * @return self
     */
    public function setPrePaymentUntil($prePaymentUntil)
    {
        $this->prePaymentUntil = $prePaymentUntil;
        return $this;
    }

    /**
     * Gets as finalPayment
     *
     * @return int
     */
    public function getFinalPayment()
    {
        return $this->finalPayment;
    }

    /**
     * Sets a new finalPayment
     *
     * @param int $finalPayment
     * @return self
     */
    public function setFinalPayment($finalPayment)
    {
        $this->finalPayment = $finalPayment;
        return $this;
    }

    /**
     * Gets as invoice
     *
     * @return bool
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice
     *
     * @param bool $invoice
     * @return self
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * Gets as creditCard
     *
     * @return bool
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param bool $creditCard
     * @return self
     */
    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Gets as eLV
     *
     * @return bool
     */
    public function getELV()
    {
        return $this->eLV;
    }

    /**
     * Sets a new eLV
     *
     * @param bool $eLV
     * @return self
     */
    public function setELV($eLV)
    {
        $this->eLV = $eLV;
        return $this;
    }

    /**
     * Gets as payPal
     *
     * @return bool
     */
    public function getPayPal()
    {
        return $this->payPal;
    }

    /**
     * Sets a new payPal
     *
     * @param bool $payPal
     * @return self
     */
    public function setPayPal($payPal)
    {
        $this->payPal = $payPal;
        return $this;
    }

    /**
     * Gets as tWINT
     *
     * @return bool
     */
    public function getTWINT()
    {
        return $this->tWINT;
    }

    /**
     * Sets a new tWINT
     *
     * @param bool $tWINT
     * @return self
     */
    public function setTWINT($tWINT)
    {
        $this->tWINT = $tWINT;
        return $this;
    }

    /**
     * Gets as prePaymentDueRule
     *
     * @return string
     */
    public function getPrePaymentDueRule()
    {
        return $this->prePaymentDueRule;
    }

    /**
     * Sets a new prePaymentDueRule
     *
     * @param string $prePaymentDueRule
     * @return self
     */
    public function setPrePaymentDueRule($prePaymentDueRule)
    {
        $this->prePaymentDueRule = $prePaymentDueRule;
        return $this;
    }

    /**
     * Gets as paymentLink
     *
     * @return bool
     */
    public function getPaymentLink()
    {
        return $this->paymentLink;
    }

    /**
     * Sets a new paymentLink
     *
     * @param bool $paymentLink
     * @return self
     */
    public function setPaymentLink($paymentLink)
    {
        $this->paymentLink = $paymentLink;
        return $this;
    }
}

