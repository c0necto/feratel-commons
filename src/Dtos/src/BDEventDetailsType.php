<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDEventDetailsType
 *
 *
 * XSD Type: BDEventDetailsType
 */
class BDEventDetailsType
{
    /**
     * @var string $partnerId
     */
    private $partnerId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $location
     */
    private $location = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $towns
     */
    private $towns = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventDetailsType\PositionAType $position
     */
    private $position = null;

    /**
     * @var bool $isTopEvent
     */
    private $isTopEvent = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventDetailsType\ConnectedEntriesAType\ConnectedEntryAType[] $connectedEntries
     */
    private $connectedEntries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventDetailsType\SerialEventsAType\SerialEventAType[] $serialEvents
     */
    private $serialEvents = null;

    /**
     * @var string $visibility
     */
    private $visibility = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType[] $dates
     */
    private $dates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DurationAType $duration
     */
    private $duration = null;

    /**
     * @var string $dataOwner
     */
    private $dataOwner = null;

    /**
     * @var string $guestCardClassificationId
     */
    private $guestCardClassificationId = null;

    /**
     * @var string $mainFacilityId
     */
    private $mainFacilityId = null;

    public function __construct(string $partnerId = null, array $names = null, array $location = null, bool $active = null, array $towns = null, \Conecto\FeratelDsi\Dtos\BDEventDetailsType\PositionAType $position = null, bool $isTopEvent = null, array $holidayThemes = null, array $connectedEntries = null, array $serialEvents = null, string $visibility = null, array $dates = null, \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DurationAType $duration = null, string $dataOwner = null, string $guestCardClassificationId = null, string $mainFacilityId = null)
    {
        $this->partnerId = $partnerId;
        $this->names = $names;
        $this->location = $location;
        $this->active = $active;
        $this->towns = $towns;
        $this->position = $position;
        $this->isTopEvent = $isTopEvent;
        $this->holidayThemes = $holidayThemes;
        $this->connectedEntries = $connectedEntries;
        $this->serialEvents = $serialEvents;
        $this->visibility = $visibility;
        $this->dates = $dates;
        $this->duration = $duration;
        $this->dataOwner = $dataOwner;
        $this->guestCardClassificationId = $guestCardClassificationId;
        $this->mainFacilityId = $mainFacilityId;
    }

    /**
     * Gets as partnerId
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Sets a new partnerId
     *
     * @param string $partnerId
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
        return $this;
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
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToLocation(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->location[] = $translation;
        return $this;
    }

    /**
     * isset location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;
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
     * @return \Conecto\FeratelDsi\Dtos\BDEventDetailsType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\PositionAType $position
     * @return self
     */
    public function setPosition(\Conecto\FeratelDsi\Dtos\BDEventDetailsType\PositionAType $position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as isTopEvent
     *
     * @return bool
     */
    public function getIsTopEvent()
    {
        return $this->isTopEvent;
    }

    /**
     * Sets a new isTopEvent
     *
     * @param bool $isTopEvent
     * @return self
     */
    public function setIsTopEvent($isTopEvent)
    {
        $this->isTopEvent = $isTopEvent;
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
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\ConnectedEntriesAType\ConnectedEntryAType $connectedEntry
     */
    public function addToConnectedEntries(\Conecto\FeratelDsi\Dtos\BDEventDetailsType\ConnectedEntriesAType\ConnectedEntryAType $connectedEntry)
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
     * @return \Conecto\FeratelDsi\Dtos\BDEventDetailsType\ConnectedEntriesAType\ConnectedEntryAType[]
     */
    public function getConnectedEntries()
    {
        return $this->connectedEntries;
    }

    /**
     * Sets a new connectedEntries
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\ConnectedEntriesAType\ConnectedEntryAType[] $connectedEntries
     * @return self
     */
    public function setConnectedEntries(array $connectedEntries)
    {
        $this->connectedEntries = $connectedEntries;
        return $this;
    }

    /**
     * Adds as serialEvent
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\SerialEventsAType\SerialEventAType $serialEvent
     */
    public function addToSerialEvents(\Conecto\FeratelDsi\Dtos\BDEventDetailsType\SerialEventsAType\SerialEventAType $serialEvent)
    {
        $this->serialEvents[] = $serialEvent;
        return $this;
    }

    /**
     * isset serialEvents
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSerialEvents($index)
    {
        return isset($this->serialEvents[$index]);
    }

    /**
     * unset serialEvents
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSerialEvents($index)
    {
        unset($this->serialEvents[$index]);
    }

    /**
     * Gets as serialEvents
     *
     * @return \Conecto\FeratelDsi\Dtos\BDEventDetailsType\SerialEventsAType\SerialEventAType[]
     */
    public function getSerialEvents()
    {
        return $this->serialEvents;
    }

    /**
     * Sets a new serialEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\SerialEventsAType\SerialEventAType[] $serialEvents
     * @return self
     */
    public function setSerialEvents(array $serialEvents)
    {
        $this->serialEvents = $serialEvents;
        return $this;
    }

    /**
     * Gets as visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Sets a new visibility
     *
     * @param string $visibility
     * @return self
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * Adds as date
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType $date
     */
    public function addToDates(\Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType $date)
    {
        $this->dates[] = $date;
        return $this;
    }

    /**
     * isset dates
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDates($index)
    {
        return isset($this->dates[$index]);
    }

    /**
     * unset dates
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDates($index)
    {
        unset($this->dates[$index]);
    }

    /**
     * Gets as dates
     *
     * @return \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType[]
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DatesAType\DateAType[] $dates
     * @return self
     */
    public function setDates(array $dates)
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventDetailsType\DurationAType $duration
     * @return self
     */
    public function setDuration(\Conecto\FeratelDsi\Dtos\BDEventDetailsType\DurationAType $duration)
    {
        $this->duration = $duration;
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

    /**
     * Gets as mainFacilityId
     *
     * @return string
     */
    public function getMainFacilityId()
    {
        return $this->mainFacilityId;
    }

    /**
     * Sets a new mainFacilityId
     *
     * @param string $mainFacilityId
     * @return self
     */
    public function setMainFacilityId($mainFacilityId)
    {
        $this->mainFacilityId = $mainFacilityId;
        return $this;
    }
}

