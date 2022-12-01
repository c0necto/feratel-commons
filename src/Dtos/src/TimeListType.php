<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing TimeListType
 *
 *
 * XSD Type: TimeListType
 */
class TimeListType
{
    /**
     * @var string[] $time
     */
    private $time = [
        
    ];

    public function __construct(array $time = null)
    {
        $this->time = $time;
    }

    /**
     * Adds as time
     *
     * @return self
     * @param string $time
     */
    public function addToTime($time)
    {
        $this->time[] = $time;
        return $this;
    }

    /**
     * isset time
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTime($index)
    {
        return isset($this->time[$index]);
    }

    /**
     * unset time
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTime($index)
    {
        unset($this->time[$index]);
    }

    /**
     * Gets as time
     *
     * @return string[]
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * @param string[] $time
     * @return self
     */
    public function setTime(array $time = null)
    {
        $this->time = $time;
        return $this;
    }
}

