<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageProductAvailabilityListType
 *
 *
 * XSD Type: BDPackageProductAvailabilityList
 */
class BDPackageProductAvailabilityListType
{
    /**
     * @var bool $ownAvailability
     */
    private $ownAvailability = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AvailabilityType[] $availability
     */
    private $availability = [
        
    ];

    public function __construct(bool $ownAvailability = null, array $availability = null)
    {
        $this->ownAvailability = $ownAvailability;
        $this->availability = $availability;
    }

    /**
     * Gets as ownAvailability
     *
     * @return bool
     */
    public function getOwnAvailability()
    {
        return $this->ownAvailability;
    }

    /**
     * Sets a new ownAvailability
     *
     * @param bool $ownAvailability
     * @return self
     */
    public function setOwnAvailability($ownAvailability)
    {
        $this->ownAvailability = $ownAvailability;
        return $this;
    }

    /**
     * Adds as availability
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\AvailabilityType $availability
     */
    public function addToAvailability(\Conecto\FeratelDsi\Dtos\AvailabilityType $availability)
    {
        $this->availability[] = $availability;
        return $this;
    }

    /**
     * isset availability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailability($index)
    {
        return isset($this->availability[$index]);
    }

    /**
     * unset availability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailability($index)
    {
        unset($this->availability[$index]);
    }

    /**
     * Gets as availability
     *
     * @return \Conecto\FeratelDsi\Dtos\AvailabilityType[]
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * @param \Conecto\FeratelDsi\Dtos\AvailabilityType[] $availability
     * @return self
     */
    public function setAvailability(array $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }
}

