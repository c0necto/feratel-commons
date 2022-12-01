<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\PaymentOptionsAType\CalculatedBasketResultAType\PaymentsAType;

/**
 * Class representing OrganisationPaymentAType
 */
class OrganisationPaymentAType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var float $amountTotal
     */
    private $amountTotal = null;

    /**
     * @var float $amountPrePayment
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

    public function __construct(string $name = null, string $id = null, float $amountTotal = null, float $amountPrePayment = null, \DateTime $dueDatePrePayment = null, float $amountFinalPayment = null, \DateTime $dueDateFinalPayment = null)
    {
        $this->name = $name;
        $this->id = $id;
        $this->amountTotal = $amountTotal;
        $this->amountPrePayment = $amountPrePayment;
        $this->dueDatePrePayment = $dueDatePrePayment;
        $this->amountFinalPayment = $amountFinalPayment;
        $this->dueDateFinalPayment = $dueDateFinalPayment;
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
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
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

