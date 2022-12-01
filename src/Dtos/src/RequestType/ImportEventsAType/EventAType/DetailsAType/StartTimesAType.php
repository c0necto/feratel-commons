<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType;

/**
 * Class representing StartTimesAType
 */
class StartTimesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\StartTimesAType\StartTimeAType[] $startTime
     */
    private $startTime = [
        
    ];

    public function __construct(array $startTime = null)
    {
        $this->startTime = $startTime;
    }

    /**
     * Adds as startTime
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\StartTimesAType\StartTimeAType $startTime
     */
    public function addToStartTime(\Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\StartTimesAType\StartTimeAType $startTime)
    {
        $this->startTime[] = $startTime;
        return $this;
    }

    /**
     * isset startTime
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStartTime($index)
    {
        return isset($this->startTime[$index]);
    }

    /**
     * unset startTime
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStartTime($index)
    {
        unset($this->startTime[$index]);
    }

    /**
     * Gets as startTime
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\StartTimesAType\StartTimeAType[]
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\StartTimesAType\StartTimeAType[] $startTime
     * @return self
     */
    public function setStartTime(array $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }
}

