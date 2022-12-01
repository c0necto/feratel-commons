<?php

namespace Conecto\FeratelDsi\Dtos\DynamicServiceParamsType;

/**
 * Class representing ParameterAType
 */
class ParameterAType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $value
     */
    private $value = null;

    public function __construct(string $name = null, string $value = null)
    {
        $this->name = $name;
        $this->value = $value;
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
}

