<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing EventListType
 *
 *
 * XSD Type: EventListType
 */
class EventListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\EventItemType[] $event
     */
    private $event = [
        
    ];

    public function __construct(array $event = null)
    {
        $this->event = $event;
    }

    /**
     * Adds as event
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\EventItemType $event
     */
    public function addToEvent(\Conecto\FeratelDsi\Dtos\EventItemType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * @return \Conecto\FeratelDsi\Dtos\EventItemType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \Conecto\FeratelDsi\Dtos\EventItemType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }
}

