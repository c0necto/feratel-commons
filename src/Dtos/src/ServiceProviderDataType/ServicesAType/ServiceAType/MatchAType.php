<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType;

/**
 * Class representing MatchAType
 */
class MatchAType
{
    /**
     * @var int $facility
     */
    private $facility = null;

    /**
     * @var int $handicapFacility
     */
    private $handicapFacility = null;

    public function __construct(int $facility = null, int $handicapFacility = null)
    {
        $this->facility = $facility;
        $this->handicapFacility = $handicapFacility;
    }

    /**
     * Gets as facility
     *
     * @return int
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * @param int $facility
     * @return self
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Gets as handicapFacility
     *
     * @return int
     */
    public function getHandicapFacility()
    {
        return $this->handicapFacility;
    }

    /**
     * Sets a new handicapFacility
     *
     * @param int $handicapFacility
     * @return self
     */
    public function setHandicapFacility($handicapFacility)
    {
        $this->handicapFacility = $handicapFacility;
        return $this;
    }
}

