<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSettingsType
 *
 *
 * XSD Type: BDPackageSettings
 */
class BDPackageSettingsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackagePriceSettingsType $priceSettings
     */
    private $priceSettings = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType[] $packageDuration
     */
    private $packageDuration = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageOccupancyType $occupancy
     */
    private $occupancy = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType[] $childAgeGroups
     */
    private $childAgeGroups = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageCalculationType $calculation
     */
    private $calculation = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BDPackagePriceSettingsType $priceSettings = null, array $packageDuration = null, \Conecto\FeratelDsi\Dtos\BDPackageOccupancyType $occupancy = null, array $childAgeGroups = null, \Conecto\FeratelDsi\Dtos\BDPackageCalculationType $calculation = null)
    {
        $this->priceSettings = $priceSettings;
        $this->packageDuration = $packageDuration;
        $this->occupancy = $occupancy;
        $this->childAgeGroups = $childAgeGroups;
        $this->calculation = $calculation;
    }

    /**
     * Gets as priceSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackagePriceSettingsType
     */
    public function getPriceSettings()
    {
        return $this->priceSettings;
    }

    /**
     * Sets a new priceSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackagePriceSettingsType $priceSettings
     * @return self
     */
    public function setPriceSettings(\Conecto\FeratelDsi\Dtos\BDPackagePriceSettingsType $priceSettings)
    {
        $this->priceSettings = $priceSettings;
        return $this;
    }

    /**
     * Adds as durationDays
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType $durationDays
     */
    public function addToPackageDuration(\Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType $durationDays)
    {
        $this->packageDuration[] = $durationDays;
        return $this;
    }

    /**
     * isset packageDuration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageDuration($index)
    {
        return isset($this->packageDuration[$index]);
    }

    /**
     * unset packageDuration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageDuration($index)
    {
        unset($this->packageDuration[$index]);
    }

    /**
     * Gets as packageDuration
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType[]
     */
    public function getPackageDuration()
    {
        return $this->packageDuration;
    }

    /**
     * Sets a new packageDuration
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType[] $packageDuration
     * @return self
     */
    public function setPackageDuration(array $packageDuration)
    {
        $this->packageDuration = $packageDuration;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageOccupancyType
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageOccupancyType $occupancy
     * @return self
     */
    public function setOccupancy(\Conecto\FeratelDsi\Dtos\BDPackageOccupancyType $occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Adds as childAgeGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType $childAgeGroup
     */
    public function addToChildAgeGroups(\Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType $childAgeGroup)
    {
        $this->childAgeGroups[] = $childAgeGroup;
        return $this;
    }

    /**
     * isset childAgeGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildAgeGroups($index)
    {
        return isset($this->childAgeGroups[$index]);
    }

    /**
     * unset childAgeGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildAgeGroups($index)
    {
        unset($this->childAgeGroups[$index]);
    }

    /**
     * Gets as childAgeGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType[]
     */
    public function getChildAgeGroups()
    {
        return $this->childAgeGroups;
    }

    /**
     * Sets a new childAgeGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChildAgeGroupsType\ChildAgeGroupAType[] $childAgeGroups
     * @return self
     */
    public function setChildAgeGroups(array $childAgeGroups)
    {
        $this->childAgeGroups = $childAgeGroups;
        return $this;
    }

    /**
     * Gets as calculation
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageCalculationType
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Sets a new calculation
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageCalculationType $calculation
     * @return self
     */
    public function setCalculation(\Conecto\FeratelDsi\Dtos\BDPackageCalculationType $calculation)
    {
        $this->calculation = $calculation;
        return $this;
    }
}

