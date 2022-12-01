<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchProductType
 *
 *
 * XSD Type: SearchProductType
 */
class SearchProductType
{
    /**
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
     *
     * @var string $id
     */
    private $id = null;

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
     * @var bool $basePriceOnly
     */
    private $basePriceOnly = null;

    /**
     * Provides classification information for request of availability (optional).
     *
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    public function __construct(string $id = null, string $productType = null, string $accommodationType = null, string $searchCode = null, bool $basePriceOnly = null, array $holidayThemes = null)
    {
        $this->id = $id;
        $this->productType = $productType;
        $this->accommodationType = $accommodationType;
        $this->searchCode = $searchCode;
        $this->basePriceOnly = $basePriceOnly;
        $this->holidayThemes = $holidayThemes;
    }

    /**
     * Gets as id
     *
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
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
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
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
     * Gets as basePriceOnly
     *
     * @return bool
     */
    public function getBasePriceOnly()
    {
        return $this->basePriceOnly;
    }

    /**
     * Sets a new basePriceOnly
     *
     * @param bool $basePriceOnly
     * @return self
     */
    public function setBasePriceOnly($basePriceOnly)
    {
        $this->basePriceOnly = $basePriceOnly;
        return $this;
    }

    /**
     * Adds as item
     *
     * Provides classification information for request of availability (optional).
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
     * Provides classification information for request of availability (optional).
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
     * Provides classification information for request of availability (optional).
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
     * Provides classification information for request of availability (optional).
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
     * Provides classification information for request of availability (optional).
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }
}

