<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasicSystemElementType
 *
 * Defines basic data element type with systems attribute.
 * XSD Type: BasicSystemElementType
 */
class BasicSystemElementType extends BasicElementType
{
    /**
     * @var string[] $systems
     */
    private $systems = null;

    public function __construct(array $systems = null, \DateTime $dateFrom = null)
    {
        $this->systems = $systems;
        parent::__construct($dateFrom);
    }

    /**
     * Adds as systems
     *
     * @return self
     * @param string $systems
     */
    public function addToSystems($systems)
    {
        $this->systems[] = $systems;
        return $this;
    }

    /**
     * isset systems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSystems($index)
    {
        return isset($this->systems[$index]);
    }

    /**
     * unset systems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSystems($index)
    {
        unset($this->systems[$index]);
    }

    /**
     * Gets as systems
     *
     * @return string[]
     */
    public function getSystems()
    {
        return $this->systems;
    }

    /**
     * Sets a new systems
     *
     * @param string $systems
     * @return self
     */
    public function setSystems(array $systems)
    {
        $this->systems = $systems;
        return $this;
    }
}

