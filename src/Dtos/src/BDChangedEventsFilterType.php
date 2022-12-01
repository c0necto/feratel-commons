<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedEventsFilterType
 *
 *
 * XSD Type: BDChangedEventsFilter
 */
class BDChangedEventsFilterType
{
    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var bool $isTopEvent
     */
    private $isTopEvent = null;

    public function __construct(string $status = null, bool $isTopEvent = null)
    {
        $this->status = $status;
        $this->isTopEvent = $isTopEvent;
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
}

