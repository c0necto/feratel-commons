<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalPriceTemplateType
 *
 *
 * XSD Type: BDAdditionalPriceTemplateType
 */
class BDAdditionalPriceTemplateType
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
     * @var \DateTime $validFrom
     */
    private $validFrom = null;

    /**
     * @var bool $isBestPrice
     */
    private $isBestPrice = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     */
    private $periods = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType $prices
     */
    private $prices = null;

    public function __construct(string $id = null, string $name = null, \DateTime $validFrom = null, bool $isBestPrice = null, \DateTime $changeDate = null, array $periods = null, \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType $prices = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->validFrom = $validFrom;
        $this->isBestPrice = $isBestPrice;
        $this->changeDate = $changeDate;
        $this->periods = $periods;
        $this->prices = $prices;
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
     * Gets as validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom
     *
     * @param \DateTime $validFrom
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Gets as isBestPrice
     *
     * @return bool
     */
    public function getIsBestPrice()
    {
        return $this->isBestPrice;
    }

    /**
     * Sets a new isBestPrice
     *
     * @param bool $isBestPrice
     * @return self
     */
    public function setIsBestPrice($isBestPrice)
    {
        $this->isBestPrice = $isBestPrice;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Adds as period
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period
     */
    public function addToPeriods(\Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period)
    {
        $this->periods[] = $period;
        return $this;
    }

    /**
     * isset periods
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriods($index)
    {
        return isset($this->periods[$index]);
    }

    /**
     * unset periods
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriods($index)
    {
        unset($this->periods[$index]);
    }

    /**
     * Gets as periods
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[]
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * Sets a new periods
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     * @return self
     */
    public function setPeriods(array $periods = null)
    {
        $this->periods = $periods;
        return $this;
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType $prices
     * @return self
     */
    public function setPrices(?\Conecto\FeratelDsi\Dtos\BDAdditionalPriceTemplatePriceListType $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }
}

