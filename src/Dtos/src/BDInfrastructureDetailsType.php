<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDInfrastructureDetailsType
 *
 *
 * XSD Type: BDInfrastructureDetailsType
 */
class BDInfrastructureDetailsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\TopicsAType $topics
     */
    private $topics = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $towns
     */
    private $towns = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\PositionAType $position
     */
    private $position = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\ConnectedEntriesAType\ConnectedEntryAType[] $connectedEntries
     */
    private $connectedEntries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\OpeningHoursAType\OpeningHourAType[] $openingHours
     */
    private $openingHours = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\FoodAndBeverageAType $foodAndBeverage
     */
    private $foodAndBeverage = null;

    /**
     * @var string $dataOwner
     */
    private $dataOwner = null;

    /**
     * @var string $guestCardClassificationId
     */
    private $guestCardClassificationId = null;

    public function __construct(array $names = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\TopicsAType $topics = null, bool $active = null, array $towns = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\PositionAType $position = null, array $holidayThemes = null, array $connectedEntries = null, array $openingHours = null, \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\FoodAndBeverageAType $foodAndBeverage = null, string $dataOwner = null, string $guestCardClassificationId = null)
    {
        $this->names = $names;
        $this->topics = $topics;
        $this->active = $active;
        $this->towns = $towns;
        $this->position = $position;
        $this->holidayThemes = $holidayThemes;
        $this->connectedEntries = $connectedEntries;
        $this->openingHours = $openingHours;
        $this->foodAndBeverage = $foodAndBeverage;
        $this->dataOwner = $dataOwner;
        $this->guestCardClassificationId = $guestCardClassificationId;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToNames(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->names[] = $translation;
        return $this;
    }

    /**
     * isset names
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     * @return self
     */
    public function setNames(array $names)
    {
        $this->names = $names;
        return $this;
    }

    /**
     * Gets as topics
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\TopicsAType
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Sets a new topics
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\TopicsAType $topics
     * @return self
     */
    public function setTopics(\Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\TopicsAType $topics)
    {
        $this->topics = $topics;
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
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToTowns(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->towns[] = $item;
        return $this;
    }

    /**
     * isset towns
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTowns($index)
    {
        return isset($this->towns[$index]);
    }

    /**
     * unset towns
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTowns($index)
    {
        unset($this->towns[$index]);
    }

    /**
     * Gets as towns
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getTowns()
    {
        return $this->towns;
    }

    /**
     * Sets a new towns
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $towns
     * @return self
     */
    public function setTowns(array $towns)
    {
        $this->towns = $towns;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\PositionAType $position
     * @return self
     */
    public function setPosition(\Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\PositionAType $position)
    {
        $this->position = $position;
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
     * Adds as connectedEntry
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\ConnectedEntriesAType\ConnectedEntryAType $connectedEntry
     */
    public function addToConnectedEntries(\Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\ConnectedEntriesAType\ConnectedEntryAType $connectedEntry)
    {
        $this->connectedEntries[] = $connectedEntry;
        return $this;
    }

    /**
     * isset connectedEntries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectedEntries($index)
    {
        return isset($this->connectedEntries[$index]);
    }

    /**
     * unset connectedEntries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectedEntries($index)
    {
        unset($this->connectedEntries[$index]);
    }

    /**
     * Gets as connectedEntries
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\ConnectedEntriesAType\ConnectedEntryAType[]
     */
    public function getConnectedEntries()
    {
        return $this->connectedEntries;
    }

    /**
     * Sets a new connectedEntries
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\ConnectedEntriesAType\ConnectedEntryAType[] $connectedEntries
     * @return self
     */
    public function setConnectedEntries(array $connectedEntries)
    {
        $this->connectedEntries = $connectedEntries;
        return $this;
    }

    /**
     * Adds as openingHour
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\OpeningHoursAType\OpeningHourAType $openingHour
     */
    public function addToOpeningHours(\Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\OpeningHoursAType\OpeningHourAType $openingHour)
    {
        $this->openingHours[] = $openingHour;
        return $this;
    }

    /**
     * isset openingHours
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOpeningHours($index)
    {
        return isset($this->openingHours[$index]);
    }

    /**
     * unset openingHours
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOpeningHours($index)
    {
        unset($this->openingHours[$index]);
    }

    /**
     * Gets as openingHours
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\OpeningHoursAType\OpeningHourAType[]
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * Sets a new openingHours
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\OpeningHoursAType\OpeningHourAType[] $openingHours
     * @return self
     */
    public function setOpeningHours(array $openingHours)
    {
        $this->openingHours = $openingHours;
        return $this;
    }

    /**
     * Gets as foodAndBeverage
     *
     * @return \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\FoodAndBeverageAType
     */
    public function getFoodAndBeverage()
    {
        return $this->foodAndBeverage;
    }

    /**
     * Sets a new foodAndBeverage
     *
     * @param \Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\FoodAndBeverageAType $foodAndBeverage
     * @return self
     */
    public function setFoodAndBeverage(?\Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\FoodAndBeverageAType $foodAndBeverage = null)
    {
        $this->foodAndBeverage = $foodAndBeverage;
        return $this;
    }

    /**
     * Gets as dataOwner
     *
     * @return string
     */
    public function getDataOwner()
    {
        return $this->dataOwner;
    }

    /**
     * Sets a new dataOwner
     *
     * @param string $dataOwner
     * @return self
     */
    public function setDataOwner($dataOwner)
    {
        $this->dataOwner = $dataOwner;
        return $this;
    }

    /**
     * Gets as guestCardClassificationId
     *
     * @return string
     */
    public function getGuestCardClassificationId()
    {
        return $this->guestCardClassificationId;
    }

    /**
     * Sets a new guestCardClassificationId
     *
     * @param string $guestCardClassificationId
     * @return self
     */
    public function setGuestCardClassificationId($guestCardClassificationId)
    {
        $this->guestCardClassificationId = $guestCardClassificationId;
        return $this;
    }
}

