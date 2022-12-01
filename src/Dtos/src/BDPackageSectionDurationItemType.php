<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionDurationItemType
 *
 *
 * XSD Type: BDPackageSectionDurationItem
 */
class BDPackageSectionDurationItemType
{
    /**
     * @var int $packageDays
     */
    private $packageDays = null;

    /**
     * @var int $sectionDays
     */
    private $sectionDays = null;

    public function __construct(int $packageDays = null, int $sectionDays = null)
    {
        $this->packageDays = $packageDays;
        $this->sectionDays = $sectionDays;
    }

    /**
     * Gets as packageDays
     *
     * @return int
     */
    public function getPackageDays()
    {
        return $this->packageDays;
    }

    /**
     * Sets a new packageDays
     *
     * @param int $packageDays
     * @return self
     */
    public function setPackageDays($packageDays)
    {
        $this->packageDays = $packageDays;
        return $this;
    }

    /**
     * Gets as sectionDays
     *
     * @return int
     */
    public function getSectionDays()
    {
        return $this->sectionDays;
    }

    /**
     * Sets a new sectionDays
     *
     * @param int $sectionDays
     * @return self
     */
    public function setSectionDays($sectionDays)
    {
        $this->sectionDays = $sectionDays;
        return $this;
    }
}

