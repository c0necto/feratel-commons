<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackagePriceValueType
 *
 *
 * XSD Type: BDPackagePriceValue
 */
class BDPackagePriceValueType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int $ageFrom
     */
    private $ageFrom = null;

    /**
     * @var int $ageTo
     */
    private $ageTo = null;

    /**
     * @var float $salesPrice
     */
    private $salesPrice = null;

    /**
     * @var float $additionalNight
     */
    private $additionalNight = null;

    public function __construct(string $type = null, int $ageFrom = null, int $ageTo = null, float $salesPrice = null, float $additionalNight = null)
    {
        $this->type = $type;
        $this->ageFrom = $ageFrom;
        $this->ageTo = $ageTo;
        $this->salesPrice = $salesPrice;
        $this->additionalNight = $additionalNight;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as ageFrom
     *
     * @return int
     */
    public function getAgeFrom()
    {
        return $this->ageFrom;
    }

    /**
     * Sets a new ageFrom
     *
     * @param int $ageFrom
     * @return self
     */
    public function setAgeFrom($ageFrom)
    {
        $this->ageFrom = $ageFrom;
        return $this;
    }

    /**
     * Gets as ageTo
     *
     * @return int
     */
    public function getAgeTo()
    {
        return $this->ageTo;
    }

    /**
     * Sets a new ageTo
     *
     * @param int $ageTo
     * @return self
     */
    public function setAgeTo($ageTo)
    {
        $this->ageTo = $ageTo;
        return $this;
    }

    /**
     * Gets as salesPrice
     *
     * @return float
     */
    public function getSalesPrice()
    {
        return $this->salesPrice;
    }

    /**
     * Sets a new salesPrice
     *
     * @param float $salesPrice
     * @return self
     */
    public function setSalesPrice($salesPrice)
    {
        $this->salesPrice = $salesPrice;
        return $this;
    }

    /**
     * Gets as additionalNight
     *
     * @return float
     */
    public function getAdditionalNight()
    {
        return $this->additionalNight;
    }

    /**
     * Sets a new additionalNight
     *
     * @param float $additionalNight
     * @return self
     */
    public function setAdditionalNight($additionalNight)
    {
        $this->additionalNight = $additionalNight;
        return $this;
    }
}

