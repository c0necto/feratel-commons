<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType;

/**
 * Class representing StartDateAType
 */
class StartDateAType
{
    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var int[] $durations
     */
    private $durations = null;

    public function __construct(\DateTime $date = null, array $durations = null)
    {
        $this->date = $date;
        $this->durations = $durations;
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
     * Adds as duration
     *
     * @return self
     * @param int $duration
     */
    public function addToDurations($duration)
    {
        $this->durations[] = $duration;
        return $this;
    }

    /**
     * isset durations
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDurations($index)
    {
        return isset($this->durations[$index]);
    }

    /**
     * unset durations
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDurations($index)
    {
        unset($this->durations[$index]);
    }

    /**
     * Gets as durations
     *
     * @return int[]
     */
    public function getDurations()
    {
        return $this->durations;
    }

    /**
     * Sets a new durations
     *
     * @param int[] $durations
     * @return self
     */
    public function setDurations(array $durations = null)
    {
        $this->durations = $durations;
        return $this;
    }
}

