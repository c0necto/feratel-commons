<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing VisitorTaxType
 *
 *
 * XSD Type: VisitorTaxType
 */
class VisitorTaxType
{
    /**
     * @var string $townId
     */
    private $townId = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \DateTime $validFrom
     */
    private $validFrom = null;

    /**
     * @var string $currency
     */
    private $currency = null;

    /**
     * @var int $childrenFromAge
     */
    private $childrenFromAge = null;

    /**
     * @var int $adultFromAge
     */
    private $adultFromAge = null;

    /**
     * @var float $taxAdult
     */
    private $taxAdult = null;

    /**
     * @var float $taxChild
     */
    private $taxChild = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    public function __construct(string $townId = null, string $code = null, string $name = null, \DateTime $validFrom = null, string $currency = null, int $childrenFromAge = null, int $adultFromAge = null, float $taxAdult = null, float $taxChild = null, \DateTime $changeDate = null)
    {
        $this->townId = $townId;
        $this->code = $code;
        $this->name = $name;
        $this->validFrom = $validFrom;
        $this->currency = $currency;
        $this->childrenFromAge = $childrenFromAge;
        $this->adultFromAge = $adultFromAge;
        $this->taxAdult = $taxAdult;
        $this->taxChild = $taxChild;
        $this->changeDate = $changeDate;
    }

    /**
     * Gets as townId
     *
     * @return string
     */
    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * Sets a new townId
     *
     * @param string $townId
     * @return self
     */
    public function setTownId($townId)
    {
        $this->townId = $townId;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
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

    /**
     * Gets as childrenFromAge
     *
     * @return int
     */
    public function getChildrenFromAge()
    {
        return $this->childrenFromAge;
    }

    /**
     * Sets a new childrenFromAge
     *
     * @param int $childrenFromAge
     * @return self
     */
    public function setChildrenFromAge($childrenFromAge)
    {
        $this->childrenFromAge = $childrenFromAge;
        return $this;
    }

    /**
     * Gets as adultFromAge
     *
     * @return int
     */
    public function getAdultFromAge()
    {
        return $this->adultFromAge;
    }

    /**
     * Sets a new adultFromAge
     *
     * @param int $adultFromAge
     * @return self
     */
    public function setAdultFromAge($adultFromAge)
    {
        $this->adultFromAge = $adultFromAge;
        return $this;
    }

    /**
     * Gets as taxAdult
     *
     * @return float
     */
    public function getTaxAdult()
    {
        return $this->taxAdult;
    }

    /**
     * Sets a new taxAdult
     *
     * @param float $taxAdult
     * @return self
     */
    public function setTaxAdult($taxAdult)
    {
        $this->taxAdult = $taxAdult;
        return $this;
    }

    /**
     * Gets as taxChild
     *
     * @return float
     */
    public function getTaxChild()
    {
        return $this->taxChild;
    }

    /**
     * Sets a new taxChild
     *
     * @param float $taxChild
     * @return self
     */
    public function setTaxChild($taxChild)
    {
        $this->taxChild = $taxChild;
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
}

