<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType;

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
     * @var float $priceFrom
     */
    private $priceFrom = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType\SectionAType[] $section
     */
    private $section = [
        
    ];

    public function __construct(string $id = null, string $name = null, float $priceFrom = null, int $order = null, string $mealCode = null, array $section = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->priceFrom = $priceFrom;
        $this->order = $order;
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
     * Gets as priceFrom
     *
     * @return float
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * Sets a new priceFrom
     *
     * @param float $priceFrom
     * @return self
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
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
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType\SectionAType $section
     */
    public function addToSection(\Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType\SectionAType $section)
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
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType\SectionAType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType\SectionAType[] $section
     * @return self
     */
    public function setSection(array $section = null)
    {
        $this->section = $section;
        return $this;
    }
}

