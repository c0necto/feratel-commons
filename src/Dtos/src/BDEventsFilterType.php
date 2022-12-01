<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDEventsFilterType
 *
 *
 * XSD Type: BDEventsFilter
 */
class BDEventsFilterType
{
    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $serialEvent
     */
    private $serialEvent = null;

    /**
     * @var string $visibility
     */
    private $visibility = null;

    /**
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var bool $isTopEvent
     */
    private $isTopEvent = null;

    /**
     * @var string $systems
     */
    private $systems = null;

    public function __construct(string $status = null, string $serialEvent = null, string $visibility = null, \DateTime $start = null, \DateTime $end = null, string $id = null, bool $isTopEvent = null, string $systems = null)
    {
        $this->status = $status;
        $this->serialEvent = $serialEvent;
        $this->visibility = $visibility;
        $this->start = $start;
        $this->end = $end;
        $this->id = $id;
        $this->isTopEvent = $isTopEvent;
        $this->systems = $systems;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * Gets as start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
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
     * Gets as systems
     *
     * @return string
     */
    public function getSystems()
    {
        return $this->systems;
    }

    /**
     * Sets a new systems
     *
     * @param string $systems
     * @return self
     */
    public function setSystems($systems)
    {
        $this->systems = $systems;
        return $this;
    }
}

