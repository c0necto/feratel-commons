<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRevenueSettingType
 *
 *
 * XSD Type: BDRevenueSettingType
 */
class BDRevenueSettingType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $salesPoint
     */
    private $salesPoint = null;

    /**
     * @var string $marketingGroupId
     */
    private $marketingGroupId = null;

    /**
     * @var \DateTime $validFrom
     */
    private $validFrom = null;

    /**
     * @var \DateTime $validTo
     */
    private $validTo = null;

    /**
     * @var int $validDays
     */
    private $validDays = null;

    /**
     * @var int $nightsFrom
     */
    private $nightsFrom = null;

    /**
     * @var int $nightsTo
     */
    private $nightsTo = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\ObjectTypeAType $objectType
     */
    private $objectType = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\PriceRuleAType $priceRule
     */
    private $priceRule = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\IncludedExtrasAType $includedExtras
     */
    private $includedExtras = null;

    public function __construct(string $id = null, \DateTime $changeDate = null, string $name = null, string $salesPoint = null, string $marketingGroupId = null, \DateTime $validFrom = null, \DateTime $validTo = null, int $validDays = null, int $nightsFrom = null, int $nightsTo = null, \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\ObjectTypeAType $objectType = null, \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\PriceRuleAType $priceRule = null, \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\IncludedExtrasAType $includedExtras = null)
    {
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->name = $name;
        $this->salesPoint = $salesPoint;
        $this->marketingGroupId = $marketingGroupId;
        $this->validFrom = $validFrom;
        $this->validTo = $validTo;
        $this->validDays = $validDays;
        $this->nightsFrom = $nightsFrom;
        $this->nightsTo = $nightsTo;
        $this->objectType = $objectType;
        $this->priceRule = $priceRule;
        $this->includedExtras = $includedExtras;
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
     * Gets as salesPoint
     *
     * @return string
     */
    public function getSalesPoint()
    {
        return $this->salesPoint;
    }

    /**
     * Sets a new salesPoint
     *
     * @param string $salesPoint
     * @return self
     */
    public function setSalesPoint($salesPoint)
    {
        $this->salesPoint = $salesPoint;
        return $this;
    }

    /**
     * Gets as marketingGroupId
     *
     * @return string
     */
    public function getMarketingGroupId()
    {
        return $this->marketingGroupId;
    }

    /**
     * Sets a new marketingGroupId
     *
     * @param string $marketingGroupId
     * @return self
     */
    public function setMarketingGroupId($marketingGroupId)
    {
        $this->marketingGroupId = $marketingGroupId;
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
     * Gets as validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Sets a new validTo
     *
     * @param \DateTime $validTo
     * @return self
     */
    public function setValidTo(\DateTime $validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Gets as validDays
     *
     * @return int
     */
    public function getValidDays()
    {
        return $this->validDays;
    }

    /**
     * Sets a new validDays
     *
     * @param int $validDays
     * @return self
     */
    public function setValidDays($validDays)
    {
        $this->validDays = $validDays;
        return $this;
    }

    /**
     * Gets as nightsFrom
     *
     * @return int
     */
    public function getNightsFrom()
    {
        return $this->nightsFrom;
    }

    /**
     * Sets a new nightsFrom
     *
     * @param int $nightsFrom
     * @return self
     */
    public function setNightsFrom($nightsFrom)
    {
        $this->nightsFrom = $nightsFrom;
        return $this;
    }

    /**
     * Gets as nightsTo
     *
     * @return int
     */
    public function getNightsTo()
    {
        return $this->nightsTo;
    }

    /**
     * Sets a new nightsTo
     *
     * @param int $nightsTo
     * @return self
     */
    public function setNightsTo($nightsTo)
    {
        $this->nightsTo = $nightsTo;
        return $this;
    }

    /**
     * Gets as objectType
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\ObjectTypeAType
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Sets a new objectType
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\ObjectTypeAType $objectType
     * @return self
     */
    public function setObjectType(\Conecto\FeratelDsi\Dtos\BDRevenueSettingType\ObjectTypeAType $objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * Gets as priceRule
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\PriceRuleAType
     */
    public function getPriceRule()
    {
        return $this->priceRule;
    }

    /**
     * Sets a new priceRule
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\PriceRuleAType $priceRule
     * @return self
     */
    public function setPriceRule(\Conecto\FeratelDsi\Dtos\BDRevenueSettingType\PriceRuleAType $priceRule)
    {
        $this->priceRule = $priceRule;
        return $this;
    }

    /**
     * Gets as includedExtras
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\IncludedExtrasAType
     */
    public function getIncludedExtras()
    {
        return $this->includedExtras;
    }

    /**
     * Sets a new includedExtras
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType\IncludedExtrasAType $includedExtras
     * @return self
     */
    public function setIncludedExtras(\Conecto\FeratelDsi\Dtos\BDRevenueSettingType\IncludedExtrasAType $includedExtras)
    {
        $this->includedExtras = $includedExtras;
        return $this;
    }
}

