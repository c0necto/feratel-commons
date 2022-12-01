<?php

namespace Conecto\FeratelDsi\Dtos\PaymentInformationType;

/**
 * Class representing PossiblePaymentMethodsAType
 */
class PossiblePaymentMethodsAType
{
    /**
     * @var int $invoicePossibleDays
     */
    private $invoicePossibleDays = null;

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
     * @var bool $sofortueberweisung
     */
    private $sofortueberweisung = null;

    /**
     * @var bool $iDeal
     */
    private $iDeal = null;

    /**
     * @var bool $payPal
     */
    private $payPal = null;

    /**
     * @var bool $tWINT
     */
    private $tWINT = null;

    /**
     * @var bool $paymentLink
     */
    private $paymentLink = null;

    /**
     * @var bool $cash
     */
    private $cash = null;

    public function __construct(int $invoicePossibleDays = null, bool $invoice = null, bool $creditCard = null, bool $eLV = null, bool $sofortueberweisung = null, bool $iDeal = null, bool $payPal = null, bool $tWINT = null, bool $paymentLink = null, bool $cash = null)
    {
        $this->invoicePossibleDays = $invoicePossibleDays;
        $this->invoice = $invoice;
        $this->creditCard = $creditCard;
        $this->eLV = $eLV;
        $this->sofortueberweisung = $sofortueberweisung;
        $this->iDeal = $iDeal;
        $this->payPal = $payPal;
        $this->tWINT = $tWINT;
        $this->paymentLink = $paymentLink;
        $this->cash = $cash;
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
     * Gets as sofortueberweisung
     *
     * @return bool
     */
    public function getSofortueberweisung()
    {
        return $this->sofortueberweisung;
    }

    /**
     * Sets a new sofortueberweisung
     *
     * @param bool $sofortueberweisung
     * @return self
     */
    public function setSofortueberweisung($sofortueberweisung)
    {
        $this->sofortueberweisung = $sofortueberweisung;
        return $this;
    }

    /**
     * Gets as iDeal
     *
     * @return bool
     */
    public function getIDeal()
    {
        return $this->iDeal;
    }

    /**
     * Sets a new iDeal
     *
     * @param bool $iDeal
     * @return self
     */
    public function setIDeal($iDeal)
    {
        $this->iDeal = $iDeal;
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

    /**
     * Gets as cash
     *
     * @return bool
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Sets a new cash
     *
     * @param bool $cash
     * @return self
     */
    public function setCash($cash)
    {
        $this->cash = $cash;
        return $this;
    }
}

