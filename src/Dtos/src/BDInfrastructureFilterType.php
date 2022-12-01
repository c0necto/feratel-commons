<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDInfrastructureFilterType
 *
 *
 * XSD Type: BDInfrastructureFilter
 */
class BDInfrastructureFilterType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var int $type
     */
    private $type = null;

    /**
     * @var string $systems
     */
    private $systems = null;

    public function __construct(string $id = null, string $status = null, int $type = null, string $systems = null)
    {
        $this->id = $id;
        $this->status = $status;
        $this->type = $type;
        $this->systems = $systems;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param int $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as systems
     *
     * @return string
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
    public function setSystems($systems)
    {
        $this->systems = $systems;
        return $this;
    }
}

