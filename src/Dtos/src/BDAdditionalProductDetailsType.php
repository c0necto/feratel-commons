<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalProductDetailsType
 *
 *
 * XSD Type: BDAdditionalProductDetailsType
 */
class BDAdditionalProductDetailsType
{
    /**
     * @var bool $freeBookable
     */
    private $freeBookable = null;

    /**
     * @var string $searchCode
     */
    private $searchCode = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $accommodationType
     */
    private $accommodationType = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    public function __construct(bool $freeBookable = null, string $searchCode = null, int $order = null, string $accommodationType = null, bool $active = null, array $name = null, array $holidayThemes = null)
    {
        $this->freeBookable = $freeBookable;
        $this->searchCode = $searchCode;
        $this->order = $order;
        $this->accommodationType = $accommodationType;
        $this->active = $active;
        $this->name = $name;
        $this->holidayThemes = $holidayThemes;
    }

    /**
     * Gets as freeBookable
     *
     * @return bool
     */
    public function getFreeBookable()
    {
        return $this->freeBookable;
    }

    /**
     * Sets a new freeBookable
     *
     * @param bool $freeBookable
     * @return self
     */
    public function setFreeBookable($freeBookable)
    {
        $this->freeBookable = $freeBookable;
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
}

