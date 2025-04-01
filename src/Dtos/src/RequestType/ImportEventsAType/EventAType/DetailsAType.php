<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType;

/**
 * Class representing DetailsAType
 */
class DetailsAType
{
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
     * @var string $town
     */
    private $town = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\PositionAType $position
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
     * @var \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType[] $connectedEntries
     */
    private $connectedEntries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $serialEvents
     */
    private $serialEvents = null;

    /**
     * @var string $visibility
     */
    private $visibility = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DatesAType\DateAType[] $dates
     */
    private $dates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DurationAType $duration
     */
    private $duration = null;

    public function __construct(array $names = null, array $location = null, bool $active = null, string $town = null, \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\PositionAType $position = null, bool $isTopEvent = null, array $holidayThemes = null, array $connectedEntries = null, array $serialEvents = null, string $visibility = null, array $dates = null, \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DurationAType $duration = null)
    {
        $this->names = $names;
        $this->location = $location;
        $this->active = $active;
        $this->town = $town;
        $this->position = $position;
        $this->isTopEvent = $isTopEvent;
        $this->holidayThemes = $holidayThemes;
        $this->connectedEntries = $connectedEntries;
        $this->serialEvents = $serialEvents;
        $this->visibility = $visibility;
        $this->dates = $dates;
        $this->duration = $duration;
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
     * Gets as town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Sets a new town
     *
     * @param string $town
     * @return self
     */
    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\PositionAType $position
     * @return self
     */
    public function setPosition(?\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\PositionAType $position = null)
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
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }

    /**
     * Adds as connectedEntry
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType $connectedEntry
     */
    public function addToConnectedEntries(\Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType $connectedEntry)
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
     * @return \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType[]
     */
    public function getConnectedEntries()
    {
        return $this->connectedEntries;
    }

    /**
     * Sets a new connectedEntries
     *
     * @param \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType[] $connectedEntries
     * @return self
     */
    public function setConnectedEntries(array $connectedEntries = null)
    {
        $this->connectedEntries = $connectedEntries;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToSerialEvents(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->serialEvents[] = $item;
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
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getSerialEvents()
    {
        return $this->serialEvents;
    }

    /**
     * Sets a new serialEvents
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $serialEvents
     * @return self
     */
    public function setSerialEvents(array $serialEvents = null)
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
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DatesAType\DateAType $date
     */
    public function addToDates(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DatesAType\DateAType $date)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DatesAType\DateAType[]
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DatesAType\DateAType[] $dates
     * @return self
     */
    public function setDates(array $dates = null)
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DurationAType $duration
     * @return self
     */
    public function setDuration(?\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DurationAType $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }
}

