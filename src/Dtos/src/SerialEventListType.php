<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SerialEventListType
 *
 *
 * XSD Type: SerialEventList
 */
class SerialEventListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\SerialEventType[] $serialEvent
     */
    private $serialEvent = [
        
    ];

    public function __construct(array $serialEvent = null)
    {
        $this->serialEvent = $serialEvent;
    }

    /**
     * Adds as serialEvent
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SerialEventType $serialEvent
     */
    public function addToSerialEvent(\Conecto\FeratelDsi\Dtos\SerialEventType $serialEvent)
    {
        $this->serialEvent[] = $serialEvent;
        return $this;
    }

    /**
     * isset serialEvent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSerialEvent($index)
    {
        return isset($this->serialEvent[$index]);
    }

    /**
     * unset serialEvent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSerialEvent($index)
    {
        unset($this->serialEvent[$index]);
    }

    /**
     * Gets as serialEvent
     *
     * @return \Conecto\FeratelDsi\Dtos\SerialEventType[]
     */
    public function getSerialEvent()
    {
        return $this->serialEvent;
    }

    /**
     * Sets a new serialEvent
     *
     * @param \Conecto\FeratelDsi\Dtos\SerialEventType[] $serialEvent
     * @return self
     */
    public function setSerialEvent(array $serialEvent = null)
    {
        $this->serialEvent = $serialEvent;
        return $this;
    }
}

