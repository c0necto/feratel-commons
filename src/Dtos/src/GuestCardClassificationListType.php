<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing GuestCardClassificationListType
 *
 *
 * XSD Type: GuestCardClassificationList
 */
class GuestCardClassificationListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $guestCardClassification
     */
    private $guestCardClassification = [
        
    ];

    public function __construct(array $guestCardClassification = null)
    {
        $this->guestCardClassification = $guestCardClassification;
    }

    /**
     * Adds as guestCardClassification
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $guestCardClassification
     */
    public function addToGuestCardClassification(\Conecto\FeratelDsi\Dtos\ClassificationType $guestCardClassification)
    {
        $this->guestCardClassification[] = $guestCardClassification;
        return $this;
    }

    /**
     * isset guestCardClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestCardClassification($index)
    {
        return isset($this->guestCardClassification[$index]);
    }

    /**
     * unset guestCardClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestCardClassification($index)
    {
        unset($this->guestCardClassification[$index]);
    }

    /**
     * Gets as guestCardClassification
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getGuestCardClassification()
    {
        return $this->guestCardClassification;
    }

    /**
     * Sets a new guestCardClassification
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $guestCardClassification
     * @return self
     */
    public function setGuestCardClassification(array $guestCardClassification = null)
    {
        $this->guestCardClassification = $guestCardClassification;
        return $this;
    }
}

