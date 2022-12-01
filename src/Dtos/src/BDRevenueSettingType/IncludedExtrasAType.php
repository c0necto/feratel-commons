<?php

namespace Conecto\FeratelDsi\Dtos\BDRevenueSettingType;

/**
 * Class representing IncludedExtrasAType
 */
class IncludedExtrasAType
{
    /**
     * @var bool $meals
     */
    private $meals = null;

    /**
     * @var bool $bedLineFinalCleaning
     */
    private $bedLineFinalCleaning = null;

    /**
     * @var bool $userExtras
     */
    private $userExtras = null;

    public function __construct(bool $meals = null, bool $bedLineFinalCleaning = null, bool $userExtras = null)
    {
        $this->meals = $meals;
        $this->bedLineFinalCleaning = $bedLineFinalCleaning;
        $this->userExtras = $userExtras;
    }

    /**
     * Gets as meals
     *
     * @return bool
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * Sets a new meals
     *
     * @param bool $meals
     * @return self
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
        return $this;
    }

    /**
     * Gets as bedLineFinalCleaning
     *
     * @return bool
     */
    public function getBedLineFinalCleaning()
    {
        return $this->bedLineFinalCleaning;
    }

    /**
     * Sets a new bedLineFinalCleaning
     *
     * @param bool $bedLineFinalCleaning
     * @return self
     */
    public function setBedLineFinalCleaning($bedLineFinalCleaning)
    {
        $this->bedLineFinalCleaning = $bedLineFinalCleaning;
        return $this;
    }

    /**
     * Gets as userExtras
     *
     * @return bool
     */
    public function getUserExtras()
    {
        return $this->userExtras;
    }

    /**
     * Sets a new userExtras
     *
     * @param bool $userExtras
     * @return self
     */
    public function setUserExtras($userExtras)
    {
        $this->userExtras = $userExtras;
        return $this;
    }
}

