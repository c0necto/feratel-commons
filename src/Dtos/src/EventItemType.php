<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing EventItemType
 *
 *
 * XSD Type: EventItemType
 */
class EventItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $location
     */
    private $location = null;

    /**
     * @var string $town
     */
    private $town = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\EventItemType\DurationAType $duration
     */
    private $duration = null;

    /**
     * @var string[] $times
     */
    private $times = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ExpandedEventType $expanded
     */
    private $expanded = null;

    public function __construct(string $id = null, string $name = null, string $location = null, string $town = null, \Conecto\FeratelDsi\Dtos\EventItemType\DurationAType $duration = null, array $times = null, \Conecto\FeratelDsi\Dtos\ExpandedEventType $expanded = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->town = $town;
        $this->duration = $duration;
        $this->times = $times;
        $this->expanded = $expanded;
    }

    /**
     * Gets as id
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
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Gets as duration
     *
     * @return \Conecto\FeratelDsi\Dtos\EventItemType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \Conecto\FeratelDsi\Dtos\EventItemType\DurationAType $duration
     * @return self
     */
    public function setDuration(\Conecto\FeratelDsi\Dtos\EventItemType\DurationAType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Adds as time
     *
     * @return self
     * @param string $time
     */
    public function addToTimes($time)
    {
        $this->times[] = $time;
        return $this;
    }

    /**
     * isset times
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimes($index)
    {
        return isset($this->times[$index]);
    }

    /**
     * unset times
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimes($index)
    {
        unset($this->times[$index]);
    }

    /**
     * Gets as times
     *
     * @return string[]
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Sets a new times
     *
     * @param string[] $times
     * @return self
     */
    public function setTimes(array $times)
    {
        $this->times = $times;
        return $this;
    }

    /**
     * Gets as expanded
     *
     * @return \Conecto\FeratelDsi\Dtos\ExpandedEventType
     */
    public function getExpanded()
    {
        return $this->expanded;
    }

    /**
     * Sets a new expanded
     *
     * @param \Conecto\FeratelDsi\Dtos\ExpandedEventType $expanded
     * @return self
     */
    public function setExpanded(\Conecto\FeratelDsi\Dtos\ExpandedEventType $expanded)
    {
        $this->expanded = $expanded;
        return $this;
    }
}

