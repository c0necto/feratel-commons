<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServiceDetailsType
 *
 *
 * XSD Type: BDServiceDetailsType
 */
class BDServiceDetailsType
{
    /**
     * Identifes service type.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var float $rooms
     */
    private $rooms = null;

    /**
     * @var int $bedrooms
     */
    private $bedrooms = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var int $useAvailability
     */
    private $useAvailability = null;

    /**
     * @var \DateTime $lastAvailabilityChange
     */
    private $lastAvailabilityChange = null;

    /**
     * @var int $maxAvailability
     */
    private $maxAvailability = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType $serviceClassification
     */
    private $serviceClassification = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var string $licenceNumber
     */
    private $licenceNumber = null;

    public function __construct(string $type = null, float $rooms = null, int $bedrooms = null, int $size = null, int $useAvailability = null, \DateTime $lastAvailabilityChange = null, int $maxAvailability = null, int $order = null, array $name = null, \Conecto\FeratelDsi\Dtos\ItemType $serviceClassification = null, string $code = null, bool $active = null, string $licenceNumber = null)
    {
        $this->type = $type;
        $this->rooms = $rooms;
        $this->bedrooms = $bedrooms;
        $this->size = $size;
        $this->useAvailability = $useAvailability;
        $this->lastAvailabilityChange = $lastAvailabilityChange;
        $this->maxAvailability = $maxAvailability;
        $this->order = $order;
        $this->name = $name;
        $this->serviceClassification = $serviceClassification;
        $this->code = $code;
        $this->active = $active;
        $this->licenceNumber = $licenceNumber;
    }

    /**
     * Gets as type
     *
     * Identifes service type.
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
     * Identifes service type.
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
     * Gets as rooms
     *
     * @return float
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Sets a new rooms
     *
     * @param float $rooms
     * @return self
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * Gets as bedrooms
     *
     * @return int
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * Sets a new bedrooms
     *
     * @param int $bedrooms
     * @return self
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as useAvailability
     *
     * @return int
     */
    public function getUseAvailability()
    {
        return $this->useAvailability;
    }

    /**
     * Sets a new useAvailability
     *
     * @param int $useAvailability
     * @return self
     */
    public function setUseAvailability($useAvailability)
    {
        $this->useAvailability = $useAvailability;
        return $this;
    }

    /**
     * Gets as lastAvailabilityChange
     *
     * @return \DateTime
     */
    public function getLastAvailabilityChange()
    {
        return $this->lastAvailabilityChange;
    }

    /**
     * Sets a new lastAvailabilityChange
     *
     * @param \DateTime $lastAvailabilityChange
     * @return self
     */
    public function setLastAvailabilityChange(\DateTime $lastAvailabilityChange)
    {
        $this->lastAvailabilityChange = $lastAvailabilityChange;
        return $this;
    }

    /**
     * Gets as maxAvailability
     *
     * @return int
     */
    public function getMaxAvailability()
    {
        return $this->maxAvailability;
    }

    /**
     * Sets a new maxAvailability
     *
     * @param int $maxAvailability
     * @return self
     */
    public function setMaxAvailability($maxAvailability)
    {
        $this->maxAvailability = $maxAvailability;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToName(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->name[] = $translation;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as serviceClassification
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType
     */
    public function getServiceClassification()
    {
        return $this->serviceClassification;
    }

    /**
     * Sets a new serviceClassification
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType $serviceClassification
     * @return self
     */
    public function setServiceClassification(?\Conecto\FeratelDsi\Dtos\ItemType $serviceClassification = null)
    {
        $this->serviceClassification = $serviceClassification;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as licenceNumber
     *
     * @return string
     */
    public function getLicenceNumber()
    {
        return $this->licenceNumber;
    }

    /**
     * Sets a new licenceNumber
     *
     * @param string $licenceNumber
     * @return self
     */
    public function setLicenceNumber($licenceNumber)
    {
        $this->licenceNumber = $licenceNumber;
        return $this;
    }
}

