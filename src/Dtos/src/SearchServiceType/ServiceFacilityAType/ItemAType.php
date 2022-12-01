<?php

namespace Conecto\FeratelDsi\Dtos\SearchServiceType\ServiceFacilityAType;

/**
 * Class representing ItemAType
 */
class ItemAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var int $value
     */
    private $value = null;

    /**
     * @var bool $mandatory
     */
    private $mandatory = null;

    public function __construct(string $id = null, int $value = null, bool $mandatory = null)
    {
        $this->id = $id;
        $this->value = $value;
        $this->mandatory = $mandatory;
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
     * Gets as value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as mandatory
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Sets a new mandatory
     *
     * @param bool $mandatory
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
        return $this;
    }
}

