<?php

namespace Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType;

/**
 * Class representing DurationsAType
 */
class DurationsAType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int[] $duration
     */
    private $duration = [
        
    ];

    public function __construct(string $type = null, array $duration = null)
    {
        $this->type = $type;
        $this->duration = $duration;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
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

