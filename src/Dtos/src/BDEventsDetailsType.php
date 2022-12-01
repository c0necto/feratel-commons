<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDEventsDetailsType
 *
 *
 * XSD Type: BDEventsDetailsType
 */
class BDEventsDetailsType extends BasicSystemElementType
{
    /**
     * @var bool $includeMainFacilityId
     */
    private $includeMainFacilityId = null;

    public function __construct(bool $includeMainFacilityId = null, array $systems = null, \DateTime $dateFrom = null)
    {
        $this->includeMainFacilityId = $includeMainFacilityId;
        parent::__construct($systems,$dateFrom);
    }

    /**
     * Gets as includeMainFacilityId
     *
     * @return bool
     */
    public function getIncludeMainFacilityId()
    {
        return $this->includeMainFacilityId;
    }

    /**
     * Sets a new includeMainFacilityId
     *
     * @param bool $includeMainFacilityId
     * @return self
     */
    public function setIncludeMainFacilityId($includeMainFacilityId)
    {
        $this->includeMainFacilityId = $includeMainFacilityId;
        return $this;
    }
}

