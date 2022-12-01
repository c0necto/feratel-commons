<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType;

/**
 * Class representing SectionsAType
 */
class SectionsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType[] $section
     */
    private $section = [
        
    ];

    public function __construct(array $section = null)
    {
        $this->section = $section;
    }

    /**
     * Adds as section
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType $section
     */
    public function addToSection(\Conecto\FeratelDsi\Dtos\PackageDetailsSectionType $section)
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
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType[] $section
     * @return self
     */
    public function setSection(array $section = null)
    {
        $this->section = $section;
        return $this;
    }
}

