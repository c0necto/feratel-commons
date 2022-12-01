<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ProductType
 *
 *
 * XSD Type: ProductType
 */
class ProductType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var int $availability
     */
    private $availability = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Used to specify if product is bookable. Value is No/Yes/YesOnlyOnRequest.
     *
     * @var string $bookable
     */
    private $bookable = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\OccupancyType $occupancy
     */
    private $occupancy = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PricesType $prices
     */
    private $prices = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var string $settlerCode
     */
    private $settlerCode = null;

    /**
     * @var int $searchLineNo
     */
    private $searchLineNo = null;

    public function __construct(string $id = null, int $availability = null, string $name = null, string $bookable = null, \Conecto\FeratelDsi\Dtos\OccupancyType $occupancy = null, \Conecto\FeratelDsi\Dtos\PricesType $prices = null, \DateTime $dateFrom = null, \DateTime $dateTo = null, string $mealCode = null, string $settlerCode = null, int $searchLineNo = null)
    {
        $this->id = $id;
        $this->availability = $availability;
        $this->name = $name;
        $this->bookable = $bookable;
        $this->occupancy = $occupancy;
        $this->prices = $prices;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->mealCode = $mealCode;
        $this->settlerCode = $settlerCode;
        $this->searchLineNo = $searchLineNo;
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
     * Gets as availability
     *
     * @return int
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * @param int $availability
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
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
     * Gets as bookable
     *
     * Used to specify if product is bookable. Value is No/Yes/YesOnlyOnRequest.
     *
     * @return string
     */
    public function getBookable()
    {
        return $this->bookable;
    }

    /**
     * Sets a new bookable
     *
     * Used to specify if product is bookable. Value is No/Yes/YesOnlyOnRequest.
     *
     * @param string $bookable
     * @return self
     */
    public function setBookable($bookable)
    {
        $this->bookable = $bookable;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * @return \Conecto\FeratelDsi\Dtos\OccupancyType
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * @param \Conecto\FeratelDsi\Dtos\OccupancyType $occupancy
     * @return self
     */
    public function setOccupancy(\Conecto\FeratelDsi\Dtos\OccupancyType $occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\PricesType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\PricesType $prices
     * @return self
     */
    public function setPrices(\Conecto\FeratelDsi\Dtos\PricesType $prices)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as mealCode
     *
     * @return string
     */
    public function getMealCode()
    {
        return $this->mealCode;
    }

    /**
     * Sets a new mealCode
     *
     * @param string $mealCode
     * @return self
     */
    public function setMealCode($mealCode)
    {
        $this->mealCode = $mealCode;
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
     * Gets as searchLineNo
     *
     * @return int
     */
    public function getSearchLineNo()
    {
        return $this->searchLineNo;
    }

    /**
     * Sets a new searchLineNo
     *
     * @param int $searchLineNo
     * @return self
     */
    public function setSearchLineNo($searchLineNo)
    {
        $this->searchLineNo = $searchLineNo;
        return $this;
    }
}

