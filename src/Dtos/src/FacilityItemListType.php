<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing FacilityItemListType
 *
 *
 * XSD Type: FacilityItemList
 */
class FacilityItemListType
{
    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $facility
     */
    private $facility = [
        
    ];

    public function __construct(\DateTime $changeDate = null, array $facility = null)
    {
        $this->changeDate = $changeDate;
        $this->facility = $facility;
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
     * Adds as facility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $facility
     */
    public function addToFacility(\Conecto\FeratelDsi\Dtos\ItemType $facility)
    {
        $this->facility[] = $facility;
        return $this;
    }

    /**
     * isset facility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacility($index)
    {
        return isset($this->facility[$index]);
    }

    /**
     * unset facility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacility($index)
    {
        unset($this->facility[$index]);
    }

    /**
     * Gets as facility
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $facility
     * @return self
     */
    public function setFacility(array $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }
}

