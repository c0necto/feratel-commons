<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDHousePackageMasterDetailsType
 *
 *
 * XSD Type: BDHousePackageMasterDetailsType
 */
class BDHousePackageMasterDetailsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    /**
     * @var int $priority
     */
    private $priority = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates
     */
    private $validDates = null;

    /**
     * @var string $owner
     */
    private $owner = null;

    /**
     * @var bool $accommodationServicesOnly
     */
    private $accommodationServicesOnly = null;

    public function __construct(array $name = null, int $priority = null, array $holidayThemes = null, bool $active = null, string $dBCode = null, \Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates = null, string $owner = null, bool $accommodationServicesOnly = null)
    {
        $this->name = $name;
        $this->priority = $priority;
        $this->holidayThemes = $holidayThemes;
        $this->active = $active;
        $this->dBCode = $dBCode;
        $this->validDates = $validDates;
        $this->owner = $owner;
        $this->accommodationServicesOnly = $accommodationServicesOnly;
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
     * Gets as priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * @param int $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
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
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
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
     * Gets as owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param string $owner
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as accommodationServicesOnly
     *
     * @return bool
     */
    public function getAccommodationServicesOnly()
    {
        return $this->accommodationServicesOnly;
    }

    /**
     * Sets a new accommodationServicesOnly
     *
     * @param bool $accommodationServicesOnly
     * @return self
     */
    public function setAccommodationServicesOnly($accommodationServicesOnly)
    {
        $this->accommodationServicesOnly = $accommodationServicesOnly;
        return $this;
    }
}

