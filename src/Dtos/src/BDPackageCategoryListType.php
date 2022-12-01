<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageCategoryListType
 *
 *
 * XSD Type: BDPackageCategoryList
 */
class BDPackageCategoryListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType[] $packageCategory
     */
    private $packageCategory = [
        
    ];

    public function __construct(array $packageCategory = null)
    {
        $this->packageCategory = $packageCategory;
    }

    /**
     * Adds as packageCategory
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType $packageCategory
     */
    public function addToPackageCategory(\Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType $packageCategory)
    {
        $this->packageCategory[] = $packageCategory;
        return $this;
    }

    /**
     * isset packageCategory
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageCategory($index)
    {
        return isset($this->packageCategory[$index]);
    }

    /**
     * unset packageCategory
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageCategory($index)
    {
        unset($this->packageCategory[$index]);
    }

    /**
     * Gets as packageCategory
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType[]
     */
    public function getPackageCategory()
    {
        return $this->packageCategory;
    }

    /**
     * Sets a new packageCategory
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType[] $packageCategory
     * @return self
     */
    public function setPackageCategory(array $packageCategory)
    {
        $this->packageCategory = $packageCategory;
        return $this;
    }
}

