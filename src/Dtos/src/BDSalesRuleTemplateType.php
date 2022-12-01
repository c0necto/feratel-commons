<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDSalesRuleTemplateType
 *
 *
 * XSD Type: BDSalesRuleTemplateType
 */
class BDSalesRuleTemplateType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \DateTime $validFrom
     */
    private $validFrom = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     */
    private $periods = null;

    /**
     * @var bool $offerable
     */
    private $offerable = null;

    /**
     * @var bool $bookable
     */
    private $bookable = null;

    /**
     * @var bool $bookOnRequest
     */
    private $bookOnRequest = null;

    /**
     * @var bool $useTATO
     */
    private $useTATO = null;

    /**
     * @var float $daysOfferStops
     */
    private $daysOfferStops = null;

    /**
     * @var float $daysBookingStops
     */
    private $daysBookingStops = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DirectPaymentType $directPayment
     */
    private $directPayment = null;

    public function __construct(string $name = null, \DateTime $validFrom = null, \DateTime $changeDate = null, string $id = null, array $periods = null, bool $offerable = null, bool $bookable = null, bool $bookOnRequest = null, bool $useTATO = null, float $daysOfferStops = null, float $daysBookingStops = null, \Conecto\FeratelDsi\Dtos\DirectPaymentType $directPayment = null)
    {
        $this->name = $name;
        $this->validFrom = $validFrom;
        $this->changeDate = $changeDate;
        $this->id = $id;
        $this->periods = $periods;
        $this->offerable = $offerable;
        $this->bookable = $bookable;
        $this->bookOnRequest = $bookOnRequest;
        $this->useTATO = $useTATO;
        $this->daysOfferStops = $daysOfferStops;
        $this->daysBookingStops = $daysBookingStops;
        $this->directPayment = $directPayment;
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
     * Gets as validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom
     *
     * @param \DateTime $validFrom
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
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
     * Adds as period
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period
     */
    public function addToPeriods(\Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period)
    {
        $this->periods[] = $period;
        return $this;
    }

    /**
     * isset periods
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriods($index)
    {
        return isset($this->periods[$index]);
    }

    /**
     * unset periods
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriods($index)
    {
        unset($this->periods[$index]);
    }

    /**
     * Gets as periods
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[]
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * Sets a new periods
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     * @return self
     */
    public function setPeriods(array $periods)
    {
        $this->periods = $periods;
        return $this;
    }

    /**
     * Gets as offerable
     *
     * @return bool
     */
    public function getOfferable()
    {
        return $this->offerable;
    }

    /**
     * Sets a new offerable
     *
     * @param bool $offerable
     * @return self
     */
    public function setOfferable($offerable)
    {
        $this->offerable = $offerable;
        return $this;
    }

    /**
     * Gets as bookable
     *
     * @return bool
     */
    public function getBookable()
    {
        return $this->bookable;
    }

    /**
     * Sets a new bookable
     *
     * @param bool $bookable
     * @return self
     */
    public function setBookable($bookable)
    {
        $this->bookable = $bookable;
        return $this;
    }

    /**
     * Gets as bookOnRequest
     *
     * @return bool
     */
    public function getBookOnRequest()
    {
        return $this->bookOnRequest;
    }

    /**
     * Sets a new bookOnRequest
     *
     * @param bool $bookOnRequest
     * @return self
     */
    public function setBookOnRequest($bookOnRequest)
    {
        $this->bookOnRequest = $bookOnRequest;
        return $this;
    }

    /**
     * Gets as useTATO
     *
     * @return bool
     */
    public function getUseTATO()
    {
        return $this->useTATO;
    }

    /**
     * Sets a new useTATO
     *
     * @param bool $useTATO
     * @return self
     */
    public function setUseTATO($useTATO)
    {
        $this->useTATO = $useTATO;
        return $this;
    }

    /**
     * Gets as daysOfferStops
     *
     * @return float
     */
    public function getDaysOfferStops()
    {
        return $this->daysOfferStops;
    }

    /**
     * Sets a new daysOfferStops
     *
     * @param float $daysOfferStops
     * @return self
     */
    public function setDaysOfferStops($daysOfferStops)
    {
        $this->daysOfferStops = $daysOfferStops;
        return $this;
    }

    /**
     * Gets as daysBookingStops
     *
     * @return float
     */
    public function getDaysBookingStops()
    {
        return $this->daysBookingStops;
    }

    /**
     * Sets a new daysBookingStops
     *
     * @param float $daysBookingStops
     * @return self
     */
    public function setDaysBookingStops($daysBookingStops)
    {
        $this->daysBookingStops = $daysBookingStops;
        return $this;
    }

    /**
     * Gets as directPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\DirectPaymentType
     */
    public function getDirectPayment()
    {
        return $this->directPayment;
    }

    /**
     * Sets a new directPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\DirectPaymentType $directPayment
     * @return self
     */
    public function setDirectPayment(\Conecto\FeratelDsi\Dtos\DirectPaymentType $directPayment)
    {
        $this->directPayment = $directPayment;
        return $this;
    }
}

