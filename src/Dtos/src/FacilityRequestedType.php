<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing FacilityRequestedType
 *
 *
 * XSD Type: FacilityRequestedType
 */
class FacilityRequestedType extends RequestedType
{
    /**
     * @var string[] $types
     */
    private $types = null;

    public function __construct(array $types = null, bool $show = null, string $id = null)
    {
        $this->types = $types;
        parent::__construct($show,$id);
    }

    /**
     * Adds as types
     *
     * @return self
     * @param string $types
     */
    public function addToTypes($types)
    {
        $this->types[] = $types;
        return $this;
    }

    /**
     * isset types
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTypes($index)
    {
        return isset($this->types[$index]);
    }

    /**
     * unset types
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTypes($index)
    {
        unset($this->types[$index]);
    }

    /**
     * Gets as types
     *
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Sets a new types
     *
     * @param string $types
     * @return self
     */
    public function setTypes(array $types)
    {
        $this->types = $types;
        return $this;
    }
}

