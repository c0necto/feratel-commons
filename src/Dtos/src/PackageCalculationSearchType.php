<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing PackageCalculationSearchType
 *
 *
 * XSD Type: PackageCalculationSearchType
 */
class PackageCalculationSearchType
{
    /**
     * @var string $dbCode
     */
    private $dbCode = null;

    /**
     * @var string $packageId
     */
    private $packageId = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var int $duration
     */
    private $duration = null;

    /**
     * @var string $settler
     */
    private $settler = null;

    /**
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * @var int $adults
     */
    private $adults = null;

    /**
     * @var string $children
     */
    private $children = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType\SectionAType[] $section
     */
    private $section = [
        
    ];

    public function __construct(string $dbCode = null, string $packageId = null, \DateTime $dateFrom = null, int $duration = null, string $settler = null, string $categoryId = null, int $adults = null, string $children = null, array $section = null)
    {
        $this->dbCode = $dbCode;
        $this->packageId = $packageId;
        $this->dateFrom = $dateFrom;
        $this->duration = $duration;
        $this->settler = $settler;
        $this->categoryId = $categoryId;
        $this->adults = $adults;
        $this->children = $children;
        $this->section = $section;
    }

    /**
     * Gets as dbCode
     *
     * @return string
     */
    public function getDbCode()
    {
        return $this->dbCode;
    }

    /**
     * Sets a new dbCode
     *
     * @param string $dbCode
     * @return self
     */
    public function setDbCode($dbCode)
    {
        $this->dbCode = $dbCode;
        return $this;
    }

    /**
     * Gets as packageId
     *
     * @return string
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Sets a new packageId
     *
     * @param string $packageId
     * @return self
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param int $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as settler
     *
     * @return string
     */
    public function getSettler()
    {
        return $this->settler;
    }

    /**
     * Sets a new settler
     *
     * @param string $settler
     * @return self
     */
    public function setSettler($settler)
    {
        $this->settler = $settler;
        return $this;
    }

    /**
     * Gets as categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * Gets as adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * Sets a new adults
     *
     * @param int $adults
     * @return self
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * Gets as children
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param string $children
     * @return self
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * Adds as section
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType\SectionAType $section
     */
    public function addToSection(\Conecto\FeratelDsi\Dtos\PackageCalculationSearchType\SectionAType $section)
    {
        $this->section[] = $section;
        return $this;
    }

    /**
     * isset section
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSection($index)
    {
        return isset($this->section[$index]);
    }

    /**
     * unset section
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSection($index)
    {
        unset($this->section[$index]);
    }

    /**
     * Gets as section
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType\SectionAType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageCalculationSearchType\SectionAType[] $section
     * @return self
     */
    public function setSection(array $section)
    {
        $this->section = $section;
        return $this;
    }
}

