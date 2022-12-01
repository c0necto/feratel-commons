<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasketSummaryFinalPaymentType
 *
 *
 * XSD Type: BasketSummaryFinalPaymentType
 */
class BasketSummaryFinalPaymentType extends BasketSummaryAdvPaymentType
{
    /**
     * @var \DateTime $dueDate
     */
    private $dueDate = null;

    public function __construct(\DateTime $dueDate = null, float $vATAmount = null, float $amount = null)
    {
        $this->dueDate = $dueDate;
        parent::__construct($vATAmount,$amount);
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
}

