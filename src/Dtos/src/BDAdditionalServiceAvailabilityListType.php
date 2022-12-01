<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalServiceAvailabilityListType
 *
 *
 * XSD Type: BDAdditionalServiceAvailabilityList
 */
class BDAdditionalServiceAvailabilityListType
{
    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityType[] $availability
     */
    private $availability = [
        
    ];

    public function __construct(\DateTime $changeDate = null, array $availability = null)
    {
        $this->changeDate = $changeDate;
        $this->availability = $availability;
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
     * Adds as availability
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityType $availability
     */
    public function addToAvailability(\Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityType $availability)
    {
        $this->availability[] = $availability;
        return $this;
    }

    /**
     * isset availability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailability($index)
    {
        return isset($this->availability[$index]);
    }

    /**
     * unset availability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailability($index)
    {
        unset($this->availability[$index]);
    }

    /**
     * Gets as availability
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityType[]
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceAvailabilityType[] $availability
     * @return self
     */
    public function setAvailability(array $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }
}

