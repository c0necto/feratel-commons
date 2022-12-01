<?php

namespace Conecto\FeratelDsi\Dtos\ResponseType;

/**
 * Class representing ImportEventsAType
 */
class ImportEventsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType[] $event
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
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType $event
     */
    public function addToEvent(\Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType $event)
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
     * @return \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType\EventAType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }
}

