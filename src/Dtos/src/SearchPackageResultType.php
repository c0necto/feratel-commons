<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchPackageResultType
 *
 *
 * XSD Type: SearchPackageResultType
 */
class SearchPackageResultType
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
     * @var \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType[] $startDates
     */
    private $startDates = null;

    /**
     * @var string $settlerCode
     */
    private $settlerCode = null;

    /**
     * @var string $headerSectionPriceType
     */
    private $headerSectionPriceType = null;

    /**
     * @var int $minChild
     */
    private $minChild = null;

    /**
     * @var int $minAdult
     */
    private $minAdult = null;

    /**
     * @var int $maxChild
     */
    private $maxChild = null;

    /**
     * @var int $maxAdult
     */
    private $maxAdult = null;

    /**
     * @var string $dbCode
     */
    private $dbCode = null;

    public function __construct(string $id = null, string $name = null, array $startDates = null, string $settlerCode = null, string $headerSectionPriceType = null, int $minChild = null, int $minAdult = null, int $maxChild = null, int $maxAdult = null, string $dbCode = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->startDates = $startDates;
        $this->settlerCode = $settlerCode;
        $this->headerSectionPriceType = $headerSectionPriceType;
        $this->minChild = $minChild;
        $this->minAdult = $minAdult;
        $this->maxChild = $maxChild;
        $this->maxAdult = $maxAdult;
        $this->dbCode = $dbCode;
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
     * Adds as startDate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType $startDate
     */
    public function addToStartDates(\Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType $startDate)
    {
        $this->startDates[] = $startDate;
        return $this;
    }

    /**
     * isset startDates
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStartDates($index)
    {
        return isset($this->startDates[$index]);
    }

    /**
     * unset startDates
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStartDates($index)
    {
        unset($this->startDates[$index]);
    }

    /**
     * Gets as startDates
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType[]
     */
    public function getStartDates()
    {
        return $this->startDates;
    }

    /**
     * Sets a new startDates
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType[] $startDates
     * @return self
     */
    public function setStartDates(array $startDates)
    {
        $this->startDates = $startDates;
        return $this;
    }

    /**
     * Gets as settlerCode
     *
     * @return string
     */
    public function getSettlerCode()
    {
        return $this->settlerCode;
    }

    /**
     * Sets a new settlerCode
     *
     * @param string $settlerCode
     * @return self
     */
    public function setSettlerCode($settlerCode)
    {
        $this->settlerCode = $settlerCode;
        return $this;
    }

    /**
     * Gets as headerSectionPriceType
     *
     * @return string
     */
    public function getHeaderSectionPriceType()
    {
        return $this->headerSectionPriceType;
    }

    /**
     * Sets a new headerSectionPriceType
     *
     * @param string $headerSectionPriceType
     * @return self
     */
    public function setHeaderSectionPriceType($headerSectionPriceType)
    {
        $this->headerSectionPriceType = $headerSectionPriceType;
        return $this;
    }

    /**
     * Gets as minChild
     *
     * @return int
     */
    public function getMinChild()
    {
        return $this->minChild;
    }

    /**
     * Sets a new minChild
     *
     * @param int $minChild
     * @return self
     */
    public function setMinChild($minChild)
    {
        $this->minChild = $minChild;
        return $this;
    }

    /**
     * Gets as minAdult
     *
     * @return int
     */
    public function getMinAdult()
    {
        return $this->minAdult;
    }

    /**
     * Sets a new minAdult
     *
     * @param int $minAdult
     * @return self
     */
    public function setMinAdult($minAdult)
    {
        $this->minAdult = $minAdult;
        return $this;
    }

    /**
     * Gets as maxChild
     *
     * @return int
     */
    public function getMaxChild()
    {
        return $this->maxChild;
    }

    /**
     * Sets a new maxChild
     *
     * @param int $maxChild
     * @return self
     */
    public function setMaxChild($maxChild)
    {
        $this->maxChild = $maxChild;
        return $this;
    }

    /**
     * Gets as maxAdult
     *
     * @return int
     */
    public function getMaxAdult()
    {
        return $this->maxAdult;
    }

    /**
     * Sets a new maxAdult
     *
     * @param int $maxAdult
     * @return self
     */
    public function setMaxAdult($maxAdult)
    {
        $this->maxAdult = $maxAdult;
        return $this;
    }

    /**
     * Gets as dbCode
     *
     * @return string
     */
    public function getDbCode()
    {
        return $this->dbCode;
    }

    /**
     * Sets a new dbCode
     *
     * @param string $dbCode
     * @return self
     */
    public function setDbCode($dbCode)
    {
        $this->dbCode = $dbCode;
        return $this;
    }
}

