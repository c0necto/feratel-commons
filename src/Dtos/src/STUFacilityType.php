<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing STUFacilityType
 *
 *
 * XSD Type: STUFacilityType
 */
class STUFacilityType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var int $value
     */
    private $value = null;

    public function __construct(string $id = null, int $value = null)
    {
        $this->id = $id;
        $this->value = $value;
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
}

