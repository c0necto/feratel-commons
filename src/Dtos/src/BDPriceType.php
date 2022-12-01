<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceType
 *
 *
 * XSD Type: BDPriceType
 */
class BDPriceType
{
    /**
     * @var int $inclVT
     */
    private $inclVT = null;

    /**
     * @var int $fromTo
     */
    private $fromTo = null;

    /**
     * @var string $rule
     */
    private $rule = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    /**
     * @var string $standardMealCode
     */
    private $standardMealCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceRangeType[] $range
     */
    private $range = [
        
    ];

    public function __construct(int $inclVT = null, int $fromTo = null, string $rule = null, int $nights = null, string $standardMealCode = null, array $range = null)
    {
        $this->inclVT = $inclVT;
        $this->fromTo = $fromTo;
        $this->rule = $rule;
        $this->nights = $nights;
        $this->standardMealCode = $standardMealCode;
        $this->range = $range;
    }

    /**
     * Gets as inclVT
     *
     * @return int
     */
    public function getInclVT()
    {
        return $this->inclVT;
    }

    /**
     * Sets a new inclVT
     *
     * @param int $inclVT
     * @return self
     */
    public function setInclVT($inclVT)
    {
        $this->inclVT = $inclVT;
        return $this;
    }

    /**
     * Gets as fromTo
     *
     * @return int
     */
    public function getFromTo()
    {
        return $this->fromTo;
    }

    /**
     * Sets a new fromTo
     *
     * @param int $fromTo
     * @return self
     */
    public function setFromTo($fromTo)
    {
        $this->fromTo = $fromTo;
        return $this;
    }

    /**
     * Gets as rule
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * @param string $rule
     * @return self
     */
    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Gets as nights
     *
     * @return int
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Sets a new nights
     *
     * @param int $nights
     * @return self
     */
    public function setNights($nights)
    {
        $this->nights = $nights;
        return $this;
    }

    /**
     * Gets as standardMealCode
     *
     * @return string
     */
    public function getStandardMealCode()
    {
        return $this->standardMealCode;
    }

    /**
     * Sets a new standardMealCode
     *
     * @param string $standardMealCode
     * @return self
     */
    public function setStandardMealCode($standardMealCode)
    {
        $this->standardMealCode = $standardMealCode;
        return $this;
    }

    /**
     * Adds as range
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceRangeType $range
     */
    public function addToRange(\Conecto\FeratelDsi\Dtos\BDPriceRangeType $range)
    {
        $this->range[] = $range;
        return $this;
    }

    /**
     * isset range
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRange($index)
    {
        return isset($this->range[$index]);
    }

    /**
     * unset range
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRange($index)
    {
        unset($this->range[$index]);
    }

    /**
     * Gets as range
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceRangeType[]
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceRangeType[] $range
     * @return self
     */
    public function setRange(array $range = null)
    {
        $this->range = $range;
        return $this;
    }
}

