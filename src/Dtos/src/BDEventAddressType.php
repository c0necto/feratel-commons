<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDEventAddressType
 *
 * Defines single simple address object.
 * XSD Type: BDEventAddressType
 */
class BDEventAddressType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $type = null, \DateTime $changeDate = null, string $id = null)
    {
        $this->type = $type;
        $this->changeDate = $changeDate;
        $this->id = $id;
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
}

