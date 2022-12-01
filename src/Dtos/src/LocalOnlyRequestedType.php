<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing LocalOnlyRequestedType
 *
 *
 * XSD Type: LocalOnlyRequestedType
 */
class LocalOnlyRequestedType extends RequestedType
{
    /**
     * @var bool $localOnly
     */
    private $localOnly = null;

    public function __construct(bool $localOnly = null, bool $show = null, string $id = null)
    {
        $this->localOnly = $localOnly;
        parent::__construct($show,$id);
    }

    /**
     * Gets as localOnly
     *
     * @return bool
     */
    public function getLocalOnly()
    {
        return $this->localOnly;
    }

    /**
     * Sets a new localOnly
     *
     * @param bool $localOnly
     * @return self
     */
    public function setLocalOnly($localOnly)
    {
        $this->localOnly = $localOnly;
        return $this;
    }
}

