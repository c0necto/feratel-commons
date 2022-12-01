<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDEventListType
 *
 *
 * XSD Type: BDEventList
 */
class BDEventListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDEventItemType[] $event
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
     * @param \Conecto\FeratelDsi\Dtos\BDEventItemType $event
     */
    public function addToEvent(\Conecto\FeratelDsi\Dtos\BDEventItemType $event)
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
     * @return \Conecto\FeratelDsi\Dtos\BDEventItemType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \Conecto\FeratelDsi\Dtos\BDEventItemType[] $event
     * @return self
     */
    public function setEvent(array $event)
    {
        $this->event = $event;
        return $this;
    }
}

