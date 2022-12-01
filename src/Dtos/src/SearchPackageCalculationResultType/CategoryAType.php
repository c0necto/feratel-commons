<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType;

/**
 * Class representing CategoryAType
 */
class CategoryAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType\SectionAType[] $section
     */
    private $section = [
        
    ];

    public function __construct(string $id = null, string $name = null, string $mealCode = null, array $section = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mealCode = $mealCode;
        $this->section = $section;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as mealCode
     *
     * @return string
     */
    public function getMealCode()
    {
        return $this->mealCode;
    }

    /**
     * Sets a new mealCode
     *
     * @param string $mealCode
     * @return self
     */
    public function setMealCode($mealCode)
    {
        $this->mealCode = $mealCode;
        return $this;
    }

    /**
     * Adds as section
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType\SectionAType $section
     */
    public function addToSection(\Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType\SectionAType $section)
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
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType\SectionAType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageCalculationResultType\CategoryAType\SectionAType[] $section
     * @return self
     */
    public function setSection(array $section)
    {
        $this->section = $section;
        return $this;
    }
}

