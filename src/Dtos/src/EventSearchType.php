<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing EventSearchType
 *
 *
 * XSD Type: EventSearchType
 */
class EventSearchType
{
    /**
     * @var \DateTime $from
     */
    private $from = null;

    /**
     * @var \DateTime $to
     */
    private $to = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $location
     */
    private $location = null;

    /**
     * @var string $serialEvent
     */
    private $serialEvent = null;

    /**
     * @var string $profile
     */
    private $profile = null;

    /**
     * @var bool $isTopEvent
     */
    private $isTopEvent = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $facilities
     */
    private $facilities = null;

    public function __construct(\DateTime $from = null, \DateTime $to = null, string $name = null, string $location = null, string $serialEvent = null, string $profile = null, bool $isTopEvent = null, array $holidayThemes = null, array $facilities = null)
    {
        $this->from = $from;
        $this->to = $to;
        $this->name = $name;
        $this->location = $location;
        $this->serialEvent = $serialEvent;
        $this->profile = $profile;
        $this->isTopEvent = $isTopEvent;
        $this->holidayThemes = $holidayThemes;
        $this->facilities = $facilities;
    }

    /**
     * Gets as from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \DateTime $from
     * @return self
     */
    public function setFrom(\DateTime $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \DateTime $to
     * @return self
     */
    public function setTo(\DateTime $to)
    {
        $this->to = $to;
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
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as serialEvent
     *
     * @return string
     */
    public function getSerialEvent()
    {
        return $this->serialEvent;
    }

    /**
     * Sets a new serialEvent
     *
     * @param string $serialEvent
     * @return self
     */
    public function setSerialEvent($serialEvent)
    {
        $this->serialEvent = $serialEvent;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param string $profile
     * @return self
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
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
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToFacilities(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->facilities[] = $item;
        return $this;
    }

    /**
     * isset facilities
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacilities($index)
    {
        return isset($this->facilities[$index]);
    }

    /**
     * unset facilities
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacilities($index)
    {
        unset($this->facilities[$index]);
    }

    /**
     * Gets as facilities
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $facilities
     * @return self
     */
    public function setFacilities(array $facilities = null)
    {
        $this->facilities = $facilities;
        return $this;
    }
}

