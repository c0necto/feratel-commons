<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDDeletedItemType
 *
 *
 * XSD Type: BDDeletedItem
 */
class BDDeletedItemType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string[] $parentTypes
     */
    private $parentTypes = null;

    public function __construct(string $type = null, array $parentTypes = null)
    {
        $this->type = $type;
        $this->parentTypes = $parentTypes;
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
     * Adds as parentTypes
     *
     * @return self
     * @param string $parentTypes
     */
    public function addToParentTypes($parentTypes)
    {
        $this->parentTypes[] = $parentTypes;
        return $this;
    }

    /**
     * isset parentTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentTypes($index)
    {
        return isset($this->parentTypes[$index]);
    }

    /**
     * unset parentTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentTypes($index)
    {
        unset($this->parentTypes[$index]);
    }

    /**
     * Gets as parentTypes
     *
     * @return string[]
     */
    public function getParentTypes()
    {
        return $this->parentTypes;
    }

    /**
     * Sets a new parentTypes
     *
     * @param string $parentTypes
     * @return self
     */
    public function setParentTypes(array $parentTypes)
    {
        $this->parentTypes = $parentTypes;
        return $this;
    }
}

