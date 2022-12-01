<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing STUFacilityListType
 *
 *
 * XSD Type: STUFacilityList
 */
class STUFacilityListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\STUFacilityType[] $facility
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
     * @param \Conecto\FeratelDsi\Dtos\STUFacilityType $facility
     */
    public function addToFacility(\Conecto\FeratelDsi\Dtos\STUFacilityType $facility)
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
     * @return \Conecto\FeratelDsi\Dtos\STUFacilityType[]
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * @param \Conecto\FeratelDsi\Dtos\STUFacilityType[] $facility
     * @return self
     */
    public function setFacility(array $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }
}

