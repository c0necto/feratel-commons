<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDGuestCardAssignmentsItemType
 *
 *
 * XSD Type: BDGuestCardAssignmentsItem
 */
class BDGuestCardAssignmentsItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $usageType
     */
    private $usageType = null;

    /**
     * @var \DateTime $validFrom
     */
    private $validFrom = null;

    /**
     * @var \DateTime $validTo
     */
    private $validTo = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     */
    private $descriptions = null;

    public function __construct(string $id = null, string $usageType = null, \DateTime $validFrom = null, \DateTime $validTo = null, \DateTime $changeDate = null, array $descriptions = null)
    {
        $this->id = $id;
        $this->usageType = $usageType;
        $this->validFrom = $validFrom;
        $this->validTo = $validTo;
        $this->changeDate = $changeDate;
        $this->descriptions = $descriptions;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as usageType
     *
     * @return string
     */
    public function getUsageType()
    {
        return $this->usageType;
    }

    /**
     * Sets a new usageType
     *
     * @param string $usageType
     * @return self
     */
    public function setUsageType($usageType)
    {
        $this->usageType = $usageType;
        return $this;
    }

    /**
     * Gets as validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom
     *
     * @param \DateTime $validFrom
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Gets as validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Sets a new validTo
     *
     * @param \DateTime $validTo
     * @return self
     */
    public function setValidTo(\DateTime $validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType $description
     */
    public function addToDescriptions(\Conecto\FeratelDsi\Dtos\DescriptionType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\DescriptionType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }
}

