<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType;

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
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\TopicsAType $topics
     */
    private $topics = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var string $town
     */
    private $town = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\PositionAType $position
     */
    private $position = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType[] $connectedEntries
     */
    private $connectedEntries = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType[] $openingHours
     */
    private $openingHours = null;

    public function __construct(array $names = null, \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\TopicsAType $topics = null, bool $active = null, string $town = null, \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\PositionAType $position = null, array $holidayThemes = null, array $connectedEntries = null, array $openingHours = null)
    {
        $this->names = $names;
        $this->topics = $topics;
        $this->active = $active;
        $this->town = $town;
        $this->position = $position;
        $this->holidayThemes = $holidayThemes;
        $this->connectedEntries = $connectedEntries;
        $this->openingHours = $openingHours;
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\TopicsAType
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Sets a new topics
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\TopicsAType $topics
     * @return self
     */
    public function setTopics(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\TopicsAType $topics)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\PositionAType $position
     * @return self
     */
    public function setPosition(?\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\PositionAType $position = null)
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
     * Adds as openingHour
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType $openingHour
     */
    public function addToOpeningHours(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType $openingHour)
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
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType[]
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * Sets a new openingHours
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType[] $openingHours
     * @return self
     */
    public function setOpeningHours(array $openingHours = null)
    {
        $this->openingHours = $openingHours;
        return $this;
    }
}

