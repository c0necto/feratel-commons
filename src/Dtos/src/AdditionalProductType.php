<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AdditionalProductType
 *
 * Defines product objects.
 * XSD Type: AdditionalProductType
 */
class AdditionalProductType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var int $availability
     */
    private $availability = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $bookable
     */
    private $bookable = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PricesType $prices
     */
    private $prices = null;

    /**
     * @var \DateTime $startDay
     */
    private $startDay = null;

    /**
     * @var string $startTime
     */
    private $startTime = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AdditionalProductType\DurationAType $duration
     */
    private $duration = null;

    /**
     * @var int $minParticipants
     */
    private $minParticipants = null;

    /**
     * @var string $settlerCode
     */
    private $settlerCode = null;

    /**
     * @var string $serviceId
     */
    private $serviceId = null;

    public function __construct(string $id = null, int $availability = null, string $name = null, string $bookable = null, \Conecto\FeratelDsi\Dtos\PricesType $prices = null, \DateTime $startDay = null, string $startTime = null, \Conecto\FeratelDsi\Dtos\AdditionalProductType\DurationAType $duration = null, int $minParticipants = null, string $settlerCode = null, string $serviceId = null)
    {
        $this->id = $id;
        $this->availability = $availability;
        $this->name = $name;
        $this->bookable = $bookable;
        $this->prices = $prices;
        $this->startDay = $startDay;
        $this->startTime = $startTime;
        $this->duration = $duration;
        $this->minParticipants = $minParticipants;
        $this->settlerCode = $settlerCode;
        $this->serviceId = $serviceId;
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
     * Gets as availability
     *
     * @return int
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * @param int $availability
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
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
     * Gets as bookable
     *
     * @return string
     */
    public function getBookable()
    {
        return $this->bookable;
    }

    /**
     * Sets a new bookable
     *
     * @param string $bookable
     * @return self
     */
    public function setBookable($bookable)
    {
        $this->bookable = $bookable;
        return $this;
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\PricesType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\PricesType $prices
     * @return self
     */
    public function setPrices(\Conecto\FeratelDsi\Dtos\PricesType $prices)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as startDay
     *
     * @return \DateTime
     */
    public function getStartDay()
    {
        return $this->startDay;
    }

    /**
     * Sets a new startDay
     *
     * @param \DateTime $startDay
     * @return self
     */
    public function setStartDay(\DateTime $startDay)
    {
        $this->startDay = $startDay;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * @param string $startTime
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return \Conecto\FeratelDsi\Dtos\AdditionalProductType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \Conecto\FeratelDsi\Dtos\AdditionalProductType\DurationAType $duration
     * @return self
     */
    public function setDuration(\Conecto\FeratelDsi\Dtos\AdditionalProductType\DurationAType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as minParticipants
     *
     * @return int
     */
    public function getMinParticipants()
    {
        return $this->minParticipants;
    }

    /**
     * Sets a new minParticipants
     *
     * @param int $minParticipants
     * @return self
     */
    public function setMinParticipants($minParticipants)
    {
        $this->minParticipants = $minParticipants;
        return $this;
    }

    /**
     * Gets as settlerCode
     *
     * @return string
     */
    public function getSettlerCode()
    {
        return $this->settlerCode;
    }

    /**
     * Sets a new settlerCode
     *
     * @param string $settlerCode
     * @return self
     */
    public function setSettlerCode($settlerCode)
    {
        $this->settlerCode = $settlerCode;
        return $this;
    }

    /**
     * Gets as serviceId
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Sets a new serviceId
     *
     * @param string $serviceId
     * @return self
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
        return $this;
    }
}

