<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDProductDetailsType
 *
 *
 * XSD Type: BDProductDetailsType
 */
class BDProductDetailsType
{
    /**
     * @var string $productType
     */
    private $productType = null;

    /**
     * @var string $accommodationType
     */
    private $accommodationType = null;

    /**
     * @var string $searchCode
     */
    private $searchCode = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDOccupancyType $occupancy
     */
    private $occupancy = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates
     */
    private $validDates = null;

    /**
     * @var bool $active
     */
    private $active = null;

    public function __construct(string $productType = null, string $accommodationType = null, string $searchCode = null, int $order = null, \Conecto\FeratelDsi\Dtos\BDOccupancyType $occupancy = null, array $holidayThemes = null, array $name = null, \Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates = null, bool $active = null)
    {
        $this->productType = $productType;
        $this->accommodationType = $accommodationType;
        $this->searchCode = $searchCode;
        $this->order = $order;
        $this->occupancy = $occupancy;
        $this->holidayThemes = $holidayThemes;
        $this->name = $name;
        $this->validDates = $validDates;
        $this->active = $active;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Gets as accommodationType
     *
     * @return string
     */
    public function getAccommodationType()
    {
        return $this->accommodationType;
    }

    /**
     * Sets a new accommodationType
     *
     * @param string $accommodationType
     * @return self
     */
    public function setAccommodationType($accommodationType)
    {
        $this->accommodationType = $accommodationType;
        return $this;
    }

    /**
     * Gets as searchCode
     *
     * @return string
     */
    public function getSearchCode()
    {
        return $this->searchCode;
    }

    /**
     * Sets a new searchCode
     *
     * @param string $searchCode
     * @return self
     */
    public function setSearchCode($searchCode)
    {
        $this->searchCode = $searchCode;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * @return \Conecto\FeratelDsi\Dtos\BDOccupancyType
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * @param \Conecto\FeratelDsi\Dtos\BDOccupancyType $occupancy
     * @return self
     */
    public function setOccupancy(\Conecto\FeratelDsi\Dtos\BDOccupancyType $occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToHolidayThemes(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->holidayThemes[] = $item;
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
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToName(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->name[] = $translation;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as validDates
     *
     * @return \Conecto\FeratelDsi\Dtos\BDProductValidDatesType
     */
    public function getValidDates()
    {
        return $this->validDates;
    }

    /**
     * Sets a new validDates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates
     * @return self
     */
    public function setValidDates(\Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates)
    {
        $this->validDates = $validDates;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
}

