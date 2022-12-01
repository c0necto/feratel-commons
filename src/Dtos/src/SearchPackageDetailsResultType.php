<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchPackageDetailsResultType
 *
 *
 * XSD Type: SearchPackageDetailsResultType
 */
class SearchPackageDetailsResultType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType[] $sections
     */
    private $sections = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType[] $categories
     */
    private $categories = null;

    /**
     * @var string $currency
     */
    private $currency = null;

    public function __construct(string $id = null, array $sections = null, array $categories = null, string $currency = null)
    {
        $this->id = $id;
        $this->sections = $sections;
        $this->categories = $categories;
        $this->currency = $currency;
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
     * Adds as section
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType $section
     */
    public function addToSections(\Conecto\FeratelDsi\Dtos\PackageDetailsSectionType $section)
    {
        $this->sections[] = $section;
        return $this;
    }

    /**
     * isset sections
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSections($index)
    {
        return isset($this->sections[$index]);
    }

    /**
     * unset sections
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSections($index)
    {
        unset($this->sections[$index]);
    }

    /**
     * Gets as sections
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Sets a new sections
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsSectionType[] $sections
     * @return self
     */
    public function setSections(array $sections = null)
    {
        $this->sections = $sections;
        return $this;
    }

    /**
     * Adds as category
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType $category
     */
    public function addToCategories(\Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType $category)
    {
        $this->categories[] = $category;
        return $this;
    }

    /**
     * isset categories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategories($index)
    {
        return isset($this->categories[$index]);
    }

    /**
     * unset categories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategories($index)
    {
        unset($this->categories[$index]);
    }

    /**
     * Gets as categories
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType[] $categories
     * @return self
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Gets as currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}

