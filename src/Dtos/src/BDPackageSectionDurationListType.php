<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionDurationListType
 *
 *
 * XSD Type: BDPackageSectionDurationList
 */
class BDPackageSectionDurationListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType[] $durationDays
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
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType $durationDays
     */
    public function addToDurationDays(\Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType $durationDays)
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
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType[]
     */
    public function getDurationDays()
    {
        return $this->durationDays;
    }

    /**
     * Sets a new durationDays
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType[] $durationDays
     * @return self
     */
    public function setDurationDays(array $durationDays = null)
    {
        $this->durationDays = $durationDays;
        return $this;
    }
}

