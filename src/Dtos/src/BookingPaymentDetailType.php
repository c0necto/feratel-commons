<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingPaymentDetailType
 *
 *
 * XSD Type: BookingPaymentDetail
 */
class BookingPaymentDetailType
{
    /**
     * @var float $amount
     */
    private $amount = null;

    /**
     * @var \DateTime $dueDate
     */
    private $dueDate = null;

    /**
     * @var string $recipient
     */
    private $recipient = null;

    public function __construct(float $amount = null, \DateTime $dueDate = null, string $recipient = null)
    {
        $this->amount = $amount;
        $this->dueDate = $dueDate;
        $this->recipient = $recipient;
    }

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * @param \DateTime $dueDate
     * @return self
     */
    public function setDueDate(\DateTime $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Gets as recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * @param string $recipient
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }
}

