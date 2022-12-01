<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KVCustomAttributeType
 *
 *
 * XSD Type: KVCustomAttributeType
 */
class KVCustomAttributeType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $dataType
     */
    private $dataType = null;

    /**
     * @var int $length
     */
    private $length = null;

    /**
     * @var string $value
     */
    private $value = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    public function __construct(string $id = null, string $type = null, string $dataType = null, int $length = null, string $value = null, string $name = null, \DateTime $changeDate = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->dataType = $dataType;
        $this->length = $length;
        $this->value = $value;
        $this->name = $name;
        $this->changeDate = $changeDate;
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
     * Gets as dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets a new dataType
     *
     * @param string $dataType
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param int $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
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
}

