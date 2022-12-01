<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CheckEffectResultType
 *
 *
 * XSD Type: CheckEffectResultType
 */
class CheckEffectResultType
{
    /**
     * @var string $cECode
     */
    private $cECode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType[] $serviceProviders
     */
    private $serviceProviders = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocationType[] $towns
     */
    private $towns = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\LocationType[] $regions
     */
    private $regions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $categories
     */
    private $categories = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $holidayThemes
     */
    private $holidayThemes = null;

    public function __construct(string $cECode = null, array $serviceProviders = null, array $towns = null, array $regions = null, array $categories = null, array $stars = null, array $holidayThemes = null)
    {
        $this->cECode = $cECode;
        $this->serviceProviders = $serviceProviders;
        $this->towns = $towns;
        $this->regions = $regions;
        $this->categories = $categories;
        $this->stars = $stars;
        $this->holidayThemes = $holidayThemes;
    }

    /**
     * Gets as cECode
     *
     * @return string
     */
    public function getCECode()
    {
        return $this->cECode;
    }

    /**
     * Sets a new cECode
     *
     * @param string $cECode
     * @return self
     */
    public function setCECode($cECode)
    {
        $this->cECode = $cECode;
        return $this;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType $serviceProvider
     */
    public function addToServiceProviders(\Conecto\FeratelDsi\Dtos\CEServiceProviderItemType $serviceProvider)
    {
        $this->serviceProviders[] = $serviceProvider;
        return $this;
    }

    /**
     * isset serviceProviders
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviders($index)
    {
        return isset($this->serviceProviders[$index]);
    }

    /**
     * unset serviceProviders
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviders($index)
    {
        unset($this->serviceProviders[$index]);
    }

    /**
     * Gets as serviceProviders
     *
     * @return \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType[]
     */
    public function getServiceProviders()
    {
        return $this->serviceProviders;
    }

    /**
     * Sets a new serviceProviders
     *
     * @param \Conecto\FeratelDsi\Dtos\CEServiceProviderItemType[] $serviceProviders
     * @return self
     */
    public function setServiceProviders(array $serviceProviders = null)
    {
        $this->serviceProviders = $serviceProviders;
        return $this;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LocationType $location
     */
    public function addToTowns(\Conecto\FeratelDsi\Dtos\LocationType $location)
    {
        $this->towns[] = $location;
        return $this;
    }

    /**
     * isset towns
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTowns($index)
    {
        return isset($this->towns[$index]);
    }

    /**
     * unset towns
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTowns($index)
    {
        unset($this->towns[$index]);
    }

    /**
     * Gets as towns
     *
     * @return \Conecto\FeratelDsi\Dtos\LocationType[]
     */
    public function getTowns()
    {
        return $this->towns;
    }

    /**
     * Sets a new towns
     *
     * @param \Conecto\FeratelDsi\Dtos\LocationType[] $towns
     * @return self
     */
    public function setTowns(array $towns = null)
    {
        $this->towns = $towns;
        return $this;
    }

    /**
     * Adds as location
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\LocationType $location
     */
    public function addToRegions(\Conecto\FeratelDsi\Dtos\LocationType $location)
    {
        $this->regions[] = $location;
        return $this;
    }

    /**
     * isset regions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegions($index)
    {
        return isset($this->regions[$index]);
    }

    /**
     * unset regions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegions($index)
    {
        unset($this->regions[$index]);
    }

    /**
     * Gets as regions
     *
     * @return \Conecto\FeratelDsi\Dtos\LocationType[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Sets a new regions
     *
     * @param \Conecto\FeratelDsi\Dtos\LocationType[] $regions
     * @return self
     */
    public function setRegions(array $regions = null)
    {
        $this->regions = $regions;
        return $this;
    }

    /**
     * Adds as category
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $category
     */
    public function addToCategories(\Conecto\FeratelDsi\Dtos\ClassificationType $category)
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
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $categories
     * @return self
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Adds as star
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $star
     */
    public function addToStars(\Conecto\FeratelDsi\Dtos\ClassificationType $star)
    {
        $this->stars[] = $star;
        return $this;
    }

    /**
     * isset stars
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStars($index)
    {
        return isset($this->stars[$index]);
    }

    /**
     * unset stars
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStars($index)
    {
        unset($this->stars[$index]);
    }

    /**
     * Gets as stars
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Sets a new stars
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $stars
     * @return self
     */
    public function setStars(array $stars = null)
    {
        $this->stars = $stars;
        return $this;
    }

    /**
     * Adds as holidayTheme
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $holidayTheme
     */
    public function addToHolidayThemes(\Conecto\FeratelDsi\Dtos\ClassificationType $holidayTheme)
    {
        $this->holidayThemes[] = $holidayTheme;
        return $this;
    }

    /**
     * isset holidayThemes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHolidayThemes($index)
    {
        return isset($this->holidayThemes[$index]);
    }

    /**
     * unset holidayThemes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHolidayThemes($index)
    {
        unset($this->holidayThemes[$index]);
    }

    /**
     * Gets as holidayThemes
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }
}

