<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CalendarType
 *
 *
 * XSD Type: CalendarType
 */
class CalendarType
{
    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\EventItemType[] $events
     */
    private $events = null;

    public function __construct(\DateTime $date = null, array $events = null)
    {
        $this->date = $date;
        $this->events = $events;
    }

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as event
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\EventItemType $event
     */
    public function addToEvents(\Conecto\FeratelDsi\Dtos\EventItemType $event)
    {
        $this->events[] = $event;
        return $this;
    }

    /**
     * isset events
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvents($index)
    {
        return isset($this->events[$index]);
    }

    /**
     * unset events
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvents($index)
    {
        unset($this->events[$index]);
    }

    /**
     * Gets as events
     *
     * @return \Conecto\FeratelDsi\Dtos\EventItemType[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * @param \Conecto\FeratelDsi\Dtos\EventItemType[] $events
     * @return self
     */
    public function setEvents(array $events)
    {
        $this->events = $events;
        return $this;
    }
}

