<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{
    /**
     * @var float $amountServiceProviderPrePayment
     */
    private $amountServiceProviderPrePayment = null;

    /**
     * @var float $amountServiceProviderFinalPayment
     */
    private $amountServiceProviderFinalPayment = null;

    /**
     * @var float $amountOrganisationPrePayment
     */
    private $amountOrganisationPrePayment = null;

    /**
     * @var float $amountOrganisationFinalPayment
     */
    private $amountOrganisationFinalPayment = null;

    /**
     * @var bool $bookingFeeSet
     */
    private $bookingFeeSet = null;

    /**
     * @var float $amountBookingFee
     */
    private $amountBookingFee = null;

    /**
     * @var bool $cancellationInsuranceSet
     */
    private $cancellationInsuranceSet = null;

    /**
     * @var float $amountCancellationInsurance
     */
    private $amountCancellationInsurance = null;

    /**
     * @var float $amountVisitorTax
     */
    private $amountVisitorTax = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType\AmountVatAType $amountVat
     */
    private $amountVat = null;

    /**
     * @var float $amountPrePayment
     */
    private $amountPrePayment = null;

    /**
     * @var float $amountFinalPayment
     */
    private $amountFinalPayment = null;

    public function __construct(float $amountServiceProviderPrePayment = null, float $amountServiceProviderFinalPayment = null, float $amountOrganisationPrePayment = null, float $amountOrganisationFinalPayment = null, bool $bookingFeeSet = null, float $amountBookingFee = null, bool $cancellationInsuranceSet = null, float $amountCancellationInsurance = null, float $amountVisitorTax = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType\AmountVatAType $amountVat = null, float $amountPrePayment = null, float $amountFinalPayment = null)
    {
        $this->amountServiceProviderPrePayment = $amountServiceProviderPrePayment;
        $this->amountServiceProviderFinalPayment = $amountServiceProviderFinalPayment;
        $this->amountOrganisationPrePayment = $amountOrganisationPrePayment;
        $this->amountOrganisationFinalPayment = $amountOrganisationFinalPayment;
        $this->bookingFeeSet = $bookingFeeSet;
        $this->amountBookingFee = $amountBookingFee;
        $this->cancellationInsuranceSet = $cancellationInsuranceSet;
        $this->amountCancellationInsurance = $amountCancellationInsurance;
        $this->amountVisitorTax = $amountVisitorTax;
        $this->amountVat = $amountVat;
        $this->amountPrePayment = $amountPrePayment;
        $this->amountFinalPayment = $amountFinalPayment;
    }

    /**
     * Gets as amountServiceProviderPrePayment
     *
     * @return float
     */
    public function getAmountServiceProviderPrePayment()
    {
        return $this->amountServiceProviderPrePayment;
    }

    /**
     * Sets a new amountServiceProviderPrePayment
     *
     * @param float $amountServiceProviderPrePayment
     * @return self
     */
    public function setAmountServiceProviderPrePayment($amountServiceProviderPrePayment)
    {
        $this->amountServiceProviderPrePayment = $amountServiceProviderPrePayment;
        return $this;
    }

    /**
     * Gets as amountServiceProviderFinalPayment
     *
     * @return float
     */
    public function getAmountServiceProviderFinalPayment()
    {
        return $this->amountServiceProviderFinalPayment;
    }

    /**
     * Sets a new amountServiceProviderFinalPayment
     *
     * @param float $amountServiceProviderFinalPayment
     * @return self
     */
    public function setAmountServiceProviderFinalPayment($amountServiceProviderFinalPayment)
    {
        $this->amountServiceProviderFinalPayment = $amountServiceProviderFinalPayment;
        return $this;
    }

    /**
     * Gets as amountOrganisationPrePayment
     *
     * @return float
     */
    public function getAmountOrganisationPrePayment()
    {
        return $this->amountOrganisationPrePayment;
    }

    /**
     * Sets a new amountOrganisationPrePayment
     *
     * @param float $amountOrganisationPrePayment
     * @return self
     */
    public function setAmountOrganisationPrePayment($amountOrganisationPrePayment)
    {
        $this->amountOrganisationPrePayment = $amountOrganisationPrePayment;
        return $this;
    }

    /**
     * Gets as amountOrganisationFinalPayment
     *
     * @return float
     */
    public function getAmountOrganisationFinalPayment()
    {
        return $this->amountOrganisationFinalPayment;
    }

    /**
     * Sets a new amountOrganisationFinalPayment
     *
     * @param float $amountOrganisationFinalPayment
     * @return self
     */
    public function setAmountOrganisationFinalPayment($amountOrganisationFinalPayment)
    {
        $this->amountOrganisationFinalPayment = $amountOrganisationFinalPayment;
        return $this;
    }

    /**
     * Gets as bookingFeeSet
     *
     * @return bool
     */
    public function getBookingFeeSet()
    {
        return $this->bookingFeeSet;
    }

    /**
     * Sets a new bookingFeeSet
     *
     * @param bool $bookingFeeSet
     * @return self
     */
    public function setBookingFeeSet($bookingFeeSet)
    {
        $this->bookingFeeSet = $bookingFeeSet;
        return $this;
    }

    /**
     * Gets as amountBookingFee
     *
     * @return float
     */
    public function getAmountBookingFee()
    {
        return $this->amountBookingFee;
    }

    /**
     * Sets a new amountBookingFee
     *
     * @param float $amountBookingFee
     * @return self
     */
    public function setAmountBookingFee($amountBookingFee)
    {
        $this->amountBookingFee = $amountBookingFee;
        return $this;
    }

    /**
     * Gets as cancellationInsuranceSet
     *
     * @return bool
     */
    public function getCancellationInsuranceSet()
    {
        return $this->cancellationInsuranceSet;
    }

    /**
     * Sets a new cancellationInsuranceSet
     *
     * @param bool $cancellationInsuranceSet
     * @return self
     */
    public function setCancellationInsuranceSet($cancellationInsuranceSet)
    {
        $this->cancellationInsuranceSet = $cancellationInsuranceSet;
        return $this;
    }

    /**
     * Gets as amountCancellationInsurance
     *
     * @return float
     */
    public function getAmountCancellationInsurance()
    {
        return $this->amountCancellationInsurance;
    }

    /**
     * Sets a new amountCancellationInsurance
     *
     * @param float $amountCancellationInsurance
     * @return self
     */
    public function setAmountCancellationInsurance($amountCancellationInsurance)
    {
        $this->amountCancellationInsurance = $amountCancellationInsurance;
        return $this;
    }

    /**
     * Gets as amountVisitorTax
     *
     * @return float
     */
    public function getAmountVisitorTax()
    {
        return $this->amountVisitorTax;
    }

    /**
     * Sets a new amountVisitorTax
     *
     * @param float $amountVisitorTax
     * @return self
     */
    public function setAmountVisitorTax($amountVisitorTax)
    {
        $this->amountVisitorTax = $amountVisitorTax;
        return $this;
    }

    /**
     * Gets as amountVat
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType\AmountVatAType
     */
    public function getAmountVat()
    {
        return $this->amountVat;
    }

    /**
     * Sets a new amountVat
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType\AmountVatAType $amountVat
     * @return self
     */
    public function setAmountVat(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\TotalAType\AmountVatAType $amountVat)
    {
        $this->amountVat = $amountVat;
        return $this;
    }

    /**
     * Gets as amountPrePayment
     *
     * @return float
     */
    public function getAmountPrePayment()
    {
        return $this->amountPrePayment;
    }

    /**
     * Sets a new amountPrePayment
     *
     * @param float $amountPrePayment
     * @return self
     */
    public function setAmountPrePayment($amountPrePayment)
    {
        $this->amountPrePayment = $amountPrePayment;
        return $this;
    }

    /**
     * Gets as amountFinalPayment
     *
     * @return float
     */
    public function getAmountFinalPayment()
    {
        return $this->amountFinalPayment;
    }

    /**
     * Sets a new amountFinalPayment
     *
     * @param float $amountFinalPayment
     * @return self
     */
    public function setAmountFinalPayment($amountFinalPayment)
    {
        $this->amountFinalPayment = $amountFinalPayment;
        return $this;
    }
}

