<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionListType
 *
 *
 * XSD Type: BDPackageSectionList
 */
class BDPackageSectionListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType[] $section
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
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType $section
     */
    public function addToSection(\Conecto\FeratelDsi\Dtos\BDPackageSectionItemType $section)
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
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionItemType[] $section
     * @return self
     */
    public function setSection(array $section)
    {
        $this->section = $section;
        return $this;
    }
}

