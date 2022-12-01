<?php

namespace Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType;

/**
 * Class representing ChildAgeGroupAType
 */
class ChildAgeGroupAType
{
    /**
     * @var int $ageFrom
     */
    private $ageFrom = null;

    /**
     * @var int $ageTo
     */
    private $ageTo = null;

    public function __construct(int $ageFrom = null, int $ageTo = null)
    {
        $this->ageFrom = $ageFrom;
        $this->ageTo = $ageTo;
    }

    /**
     * Gets as ageFrom
     *
     * @return int
     */
    public function getAgeFrom()
    {
        return $this->ageFrom;
    }

    /**
     * Sets a new ageFrom
     *
     * @param int $ageFrom
     * @return self
     */
    public function setAgeFrom($ageFrom)
    {
        $this->ageFrom = $ageFrom;
        return $this;
    }

    /**
     * Gets as ageTo
     *
     * @return int
     */
    public function getAgeTo()
    {
        return $this->ageTo;
    }

    /**
     * Sets a new ageTo
     *
     * @param int $ageTo
     * @return self
     */
    public function setAgeTo($ageTo)
    {
        $this->ageTo = $ageTo;
        return $this;
    }
}

