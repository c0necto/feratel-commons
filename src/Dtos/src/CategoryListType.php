<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CategoryListType
 *
 *
 * XSD Type: CategoryList
 */
class CategoryListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $category
     */
    private $category = [
        
    ];

    public function __construct(array $category = null)
    {
        $this->category = $category;
    }

    /**
     * Adds as category
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $category
     */
    public function addToCategory(\Conecto\FeratelDsi\Dtos\ClassificationType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }
}

