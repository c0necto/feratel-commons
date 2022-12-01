<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageStartDatesResultType\StartDateAType;

/**
 * Class representing DurationsAType
 */
class DurationsAType
{
    /**
     * @var int[] $duration
     */
    private $duration = [
        
    ];

    public function __construct(array $duration = null)
    {
        $this->duration = $duration;
    }

    /**
     * Adds as duration
     *
     * @return self
     * @param int $duration
     */
    public function addToDuration($duration)
    {
        $this->duration[] = $duration;
        return $this;
    }

    /**
     * isset duration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDuration($index)
    {
        return isset($this->duration[$index]);
    }

    /**
     * unset duration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDuration($index)
    {
        unset($this->duration[$index]);
    }

    /**
     * Gets as duration
     *
     * @return int[]
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param int[] $duration
     * @return self
     */
    public function setDuration(array $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }
}

