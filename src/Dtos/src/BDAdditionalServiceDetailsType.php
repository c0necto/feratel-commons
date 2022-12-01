<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDAdditionalServiceDetailsType
 *
 *
 * XSD Type: BDAdditionalServiceDetailsType
 */
class BDAdditionalServiceDetailsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var int $order
     */
    private $order = null;

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
     * @var int $minParticipants
     */
    private $minParticipants = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType $dates
     */
    private $dates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\StartTimesAType\StartTimeAType[] $startTimes
     */
    private $startTimes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DurationsAType $durations
     */
    private $durations = null;

    /**
     * @var string $guestCardClassificationId
     */
    private $guestCardClassificationId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\MapPositionType $position
     */
    private $position = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $additionalServiceTypes
     */
    private $additionalServiceTypes = null;

    public function __construct(array $name = null, string $code = null, bool $active = null, int $order = null, int $useAvailability = null, \DateTime $lastAvailabilityChange = null, int $maxAvailability = null, int $minParticipants = null, \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType $dates = null, array $startTimes = null, \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DurationsAType $durations = null, string $guestCardClassificationId = null, \Conecto\FeratelDsi\Dtos\MapPositionType $position = null, array $additionalServiceTypes = null)
    {
        $this->name = $name;
        $this->code = $code;
        $this->active = $active;
        $this->order = $order;
        $this->useAvailability = $useAvailability;
        $this->lastAvailabilityChange = $lastAvailabilityChange;
        $this->maxAvailability = $maxAvailability;
        $this->minParticipants = $minParticipants;
        $this->dates = $dates;
        $this->startTimes = $startTimes;
        $this->durations = $durations;
        $this->guestCardClassificationId = $guestCardClassificationId;
        $this->position = $position;
        $this->additionalServiceTypes = $additionalServiceTypes;
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
     * Gets as minParticipants
     *
     * @return int
     */
    public function getMinParticipants()
    {
        return $this->minParticipants;
    }

    /**
     * Sets a new minParticipants
     *
     * @param int $minParticipants
     * @return self
     */
    public function setMinParticipants($minParticipants)
    {
        $this->minParticipants = $minParticipants;
        return $this;
    }

    /**
     * Gets as dates
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType $dates
     * @return self
     */
    public function setDates(\Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DatesAType $dates)
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * Adds as startTime
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\StartTimesAType\StartTimeAType $startTime
     */
    public function addToStartTimes(\Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\StartTimesAType\StartTimeAType $startTime)
    {
        $this->startTimes[] = $startTime;
        return $this;
    }

    /**
     * isset startTimes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStartTimes($index)
    {
        return isset($this->startTimes[$index]);
    }

    /**
     * unset startTimes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStartTimes($index)
    {
        unset($this->startTimes[$index]);
    }

    /**
     * Gets as startTimes
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\StartTimesAType\StartTimeAType[]
     */
    public function getStartTimes()
    {
        return $this->startTimes;
    }

    /**
     * Sets a new startTimes
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\StartTimesAType\StartTimeAType[] $startTimes
     * @return self
     */
    public function setStartTimes(array $startTimes)
    {
        $this->startTimes = $startTimes;
        return $this;
    }

    /**
     * Gets as durations
     *
     * @return \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DurationsAType
     */
    public function getDurations()
    {
        return $this->durations;
    }

    /**
     * Sets a new durations
     *
     * @param \Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DurationsAType $durations
     * @return self
     */
    public function setDurations(\Conecto\FeratelDsi\Dtos\BDAdditionalServiceDetailsType\DurationsAType $durations)
    {
        $this->durations = $durations;
        return $this;
    }

    /**
     * Gets as guestCardClassificationId
     *
     * @return string
     */
    public function getGuestCardClassificationId()
    {
        return $this->guestCardClassificationId;
    }

    /**
     * Sets a new guestCardClassificationId
     *
     * @param string $guestCardClassificationId
     * @return self
     */
    public function setGuestCardClassificationId($guestCardClassificationId)
    {
        $this->guestCardClassificationId = $guestCardClassificationId;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return \Conecto\FeratelDsi\Dtos\MapPositionType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\MapPositionType $position
     * @return self
     */
    public function setPosition(?\Conecto\FeratelDsi\Dtos\MapPositionType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToAdditionalServiceTypes(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->additionalServiceTypes[] = $item;
        return $this;
    }

    /**
     * isset additionalServiceTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalServiceTypes($index)
    {
        return isset($this->additionalServiceTypes[$index]);
    }

    /**
     * unset additionalServiceTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalServiceTypes($index)
    {
        unset($this->additionalServiceTypes[$index]);
    }

    /**
     * Gets as additionalServiceTypes
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getAdditionalServiceTypes()
    {
        return $this->additionalServiceTypes;
    }

    /**
     * Sets a new additionalServiceTypes
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $additionalServiceTypes
     * @return self
     */
    public function setAdditionalServiceTypes(array $additionalServiceTypes = null)
    {
        $this->additionalServiceTypes = $additionalServiceTypes;
        return $this;
    }
}

