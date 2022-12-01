<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageDetailsType
 *
 *
 * XSD Type: BDPackageDetailsType
 */
class BDPackageDetailsType
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
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $meetingPoint
     */
    private $meetingPoint = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageDetailsType\BookableAType $bookable
     */
    private $bookable = null;

    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\MapPositionType $position
     */
    private $position = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates
     */
    private $validDates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType[] $packageCategories
     */
    private $packageCategories = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSettingsType $settings
     */
    private $settings = null;

    /**
     * @var string $owner
     */
    private $owner = null;

    public function __construct(array $name = null, int $priority = null, array $meetingPoint = null, array $holidayThemes = null, bool $active = null, \Conecto\FeratelDsi\Dtos\BDPackageDetailsType\BookableAType $bookable = null, string $dBCode = null, \Conecto\FeratelDsi\Dtos\MapPositionType $position = null, \Conecto\FeratelDsi\Dtos\BDProductValidDatesType $validDates = null, array $packageCategories = null, \Conecto\FeratelDsi\Dtos\BDPackageSettingsType $settings = null, string $owner = null)
    {
        $this->name = $name;
        $this->priority = $priority;
        $this->meetingPoint = $meetingPoint;
        $this->holidayThemes = $holidayThemes;
        $this->active = $active;
        $this->bookable = $bookable;
        $this->dBCode = $dBCode;
        $this->position = $position;
        $this->validDates = $validDates;
        $this->packageCategories = $packageCategories;
        $this->settings = $settings;
        $this->owner = $owner;
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
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToMeetingPoint(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->meetingPoint[] = $translation;
        return $this;
    }

    /**
     * isset meetingPoint
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeetingPoint($index)
    {
        return isset($this->meetingPoint[$index]);
    }

    /**
     * unset meetingPoint
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeetingPoint($index)
    {
        unset($this->meetingPoint[$index]);
    }

    /**
     * Gets as meetingPoint
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getMeetingPoint()
    {
        return $this->meetingPoint;
    }

    /**
     * Sets a new meetingPoint
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $meetingPoint
     * @return self
     */
    public function setMeetingPoint(array $meetingPoint)
    {
        $this->meetingPoint = $meetingPoint;
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
    public function setHolidayThemes(array $holidayThemes)
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
     * Gets as bookable
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageDetailsType\BookableAType
     */
    public function getBookable()
    {
        return $this->bookable;
    }

    /**
     * Sets a new bookable
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageDetailsType\BookableAType $bookable
     * @return self
     */
    public function setBookable(\Conecto\FeratelDsi\Dtos\BDPackageDetailsType\BookableAType $bookable)
    {
        $this->bookable = $bookable;
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
     * Gets as position
     *
     * @return \Conecto\FeratelDsi\Dtos\MapPositionType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\MapPositionType $position
     * @return self
     */
    public function setPosition(\Conecto\FeratelDsi\Dtos\MapPositionType $position)
    {
        $this->position = $position;
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
     * Adds as packageCategory
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType $packageCategory
     */
    public function addToPackageCategories(\Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType $packageCategory)
    {
        $this->packageCategories[] = $packageCategory;
        return $this;
    }

    /**
     * isset packageCategories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageCategories($index)
    {
        return isset($this->packageCategories[$index]);
    }

    /**
     * unset packageCategories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageCategories($index)
    {
        unset($this->packageCategories[$index]);
    }

    /**
     * Gets as packageCategories
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType[]
     */
    public function getPackageCategories()
    {
        return $this->packageCategories;
    }

    /**
     * Sets a new packageCategories
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageCategoryItemType[] $packageCategories
     * @return self
     */
    public function setPackageCategories(array $packageCategories)
    {
        $this->packageCategories = $packageCategories;
        return $this;
    }

    /**
     * Gets as settings
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSettingsType
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Sets a new settings
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSettingsType $settings
     * @return self
     */
    public function setSettings(\Conecto\FeratelDsi\Dtos\BDPackageSettingsType $settings)
    {
        $this->settings = $settings;
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
}

