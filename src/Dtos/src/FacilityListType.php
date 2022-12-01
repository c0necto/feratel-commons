<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing FacilityListType
 *
 *
 * XSD Type: FacilityList
 */
class FacilityListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\FacilityType[] $facility
     */
    private $facility = [
        
    ];

    public function __construct(array $facility = null)
    {
        $this->facility = $facility;
    }

    /**
     * Adds as facility
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\FacilityType $facility
     */
    public function addToFacility(\Conecto\FeratelDsi\Dtos\FacilityType $facility)
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
     * @return \Conecto\FeratelDsi\Dtos\FacilityType[]
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * @param \Conecto\FeratelDsi\Dtos\FacilityType[] $facility
     * @return self
     */
    public function setFacility(array $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }
}

