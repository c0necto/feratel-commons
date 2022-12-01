<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionBookingRulesType
 *
 *
 * XSD Type: BDPackageSectionBookingRulesType
 */
class BDPackageSectionBookingRulesType
{
    /**
     * @var int $unitsBookable
     */
    private $unitsBookable = null;

    /**
     * @var string $bookablePer
     */
    private $bookablePer = null;

    /**
     * @var int $maxPerPackage
     */
    private $maxPerPackage = null;

    public function __construct(int $unitsBookable = null, string $bookablePer = null, int $maxPerPackage = null)
    {
        $this->unitsBookable = $unitsBookable;
        $this->bookablePer = $bookablePer;
        $this->maxPerPackage = $maxPerPackage;
    }

    /**
     * Gets as unitsBookable
     *
     * @return int
     */
    public function getUnitsBookable()
    {
        return $this->unitsBookable;
    }

    /**
     * Sets a new unitsBookable
     *
     * @param int $unitsBookable
     * @return self
     */
    public function setUnitsBookable($unitsBookable)
    {
        $this->unitsBookable = $unitsBookable;
        return $this;
    }

    /**
     * Gets as bookablePer
     *
     * @return string
     */
    public function getBookablePer()
    {
        return $this->bookablePer;
    }

    /**
     * Sets a new bookablePer
     *
     * @param string $bookablePer
     * @return self
     */
    public function setBookablePer($bookablePer)
    {
        $this->bookablePer = $bookablePer;
        return $this;
    }

    /**
     * Gets as maxPerPackage
     *
     * @return int
     */
    public function getMaxPerPackage()
    {
        return $this->maxPerPackage;
    }

    /**
     * Sets a new maxPerPackage
     *
     * @param int $maxPerPackage
     * @return self
     */
    public function setMaxPerPackage($maxPerPackage)
    {
        $this->maxPerPackage = $maxPerPackage;
        return $this;
    }
}

