<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CustomAttributeItemType
 *
 *
 * XSD Type: CustomAttributeItem
 */
class CustomAttributeItemType
{
    /**
     * @var string $value
     */
    private $value = null;

    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $value = null, string $id = null)
    {
        $this->value = $value;
        $this->id = $id;
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

