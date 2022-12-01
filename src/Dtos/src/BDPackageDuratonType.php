<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageDuratonType
 *
 *
 * XSD Type: BDPackageDuraton
 */
class BDPackageDuratonType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType[] $durationDays
     */
    private $durationDays = [
        
    ];

    public function __construct(array $durationDays = null)
    {
        $this->durationDays = $durationDays;
    }

    /**
     * Adds as durationDays
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType $durationDays
     */
    public function addToDurationDays(\Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType $durationDays)
    {
        $this->durationDays[] = $durationDays;
        return $this;
    }

    /**
     * isset durationDays
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDurationDays($index)
    {
        return isset($this->durationDays[$index]);
    }

    /**
     * unset durationDays
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDurationDays($index)
    {
        unset($this->durationDays[$index]);
    }

    /**
     * Gets as durationDays
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType[]
     */
    public function getDurationDays()
    {
        return $this->durationDays;
    }

    /**
     * Sets a new durationDays
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageDurationDaysType[] $durationDays
     * @return self
     */
    public function setDurationDays(array $durationDays = null)
    {
        $this->durationDays = $durationDays;
        return $this;
    }
}

