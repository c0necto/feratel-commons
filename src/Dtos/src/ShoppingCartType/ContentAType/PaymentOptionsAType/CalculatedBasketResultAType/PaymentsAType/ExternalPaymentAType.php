<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType;

/**
 * Class representing ExternalPaymentAType
 */
class ExternalPaymentAType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var float $amountTotal
     */
    private $amountTotal = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType\AmountPrePaymentAType $amountPrePayment
     */
    private $amountPrePayment = null;

    /**
     * @var \DateTime $dueDatePrePayment
     */
    private $dueDatePrePayment = null;

    /**
     * @var float $amountFinalPayment
     */
    private $amountFinalPayment = null;

    /**
     * @var \DateTime $dueDateFinalPayment
     */
    private $dueDateFinalPayment = null;

    public function __construct(string $type = null, float $amountTotal = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType\AmountPrePaymentAType $amountPrePayment = null, \DateTime $dueDatePrePayment = null, float $amountFinalPayment = null, \DateTime $dueDateFinalPayment = null)
    {
        $this->type = $type;
        $this->amountTotal = $amountTotal;
        $this->amountPrePayment = $amountPrePayment;
        $this->dueDatePrePayment = $dueDatePrePayment;
        $this->amountFinalPayment = $amountFinalPayment;
        $this->dueDateFinalPayment = $dueDateFinalPayment;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as amountTotal
     *
     * @return float
     */
    public function getAmountTotal()
    {
        return $this->amountTotal;
    }

    /**
     * Sets a new amountTotal
     *
     * @param float $amountTotal
     * @return self
     */
    public function setAmountTotal($amountTotal)
    {
        $this->amountTotal = $amountTotal;
        return $this;
    }

    /**
     * Gets as amountPrePayment
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType\AmountPrePaymentAType
     */
    public function getAmountPrePayment()
    {
        return $this->amountPrePayment;
    }

    /**
     * Sets a new amountPrePayment
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType\AmountPrePaymentAType $amountPrePayment
     * @return self
     */
    public function setAmountPrePayment(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType\ExternalPaymentAType\AmountPrePaymentAType $amountPrePayment)
    {
        $this->amountPrePayment = $amountPrePayment;
        return $this;
    }

    /**
     * Gets as dueDatePrePayment
     *
     * @return \DateTime
     */
    public function getDueDatePrePayment()
    {
        return $this->dueDatePrePayment;
    }

    /**
     * Sets a new dueDatePrePayment
     *
     * @param \DateTime $dueDatePrePayment
     * @return self
     */
    public function setDueDatePrePayment(\DateTime $dueDatePrePayment)
    {
        $this->dueDatePrePayment = $dueDatePrePayment;
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

    /**
     * Gets as dueDateFinalPayment
     *
     * @return \DateTime
     */
    public function getDueDateFinalPayment()
    {
        return $this->dueDateFinalPayment;
    }

    /**
     * Sets a new dueDateFinalPayment
     *
     * @param \DateTime $dueDateFinalPayment
     * @return self
     */
    public function setDueDateFinalPayment(\DateTime $dueDateFinalPayment)
    {
        $this->dueDateFinalPayment = $dueDateFinalPayment;
        return $this;
    }
}

