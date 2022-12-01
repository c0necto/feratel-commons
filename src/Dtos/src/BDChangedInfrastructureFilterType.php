<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedInfrastructureFilterType
 *
 *
 * XSD Type: BDChangedInfrastructureFilter
 */
class BDChangedInfrastructureFilterType
{
    /**
     * @var string $status
     */
    private $status = null;

    public function __construct(string $status = null)
    {
        $this->status = $status;
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
}

