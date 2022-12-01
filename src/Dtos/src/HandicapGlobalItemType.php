<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HandicapGlobalItemType
 *
 *
 * XSD Type: HandicapGlobalItem
 */
class HandicapGlobalItemType extends HandicapBaseItemType
{
    /**
     * @var bool $global
     */
    private $global = null;

    public function __construct(bool $global = null, bool $active = null, string $id = null, \DateTime $changeDate = null, array $name = null)
    {
        $this->global = $global;
        parent::__construct($active,$id,$changeDate,$name);
    }

    /**
     * Gets as global
     *
     * @return bool
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * Sets a new global
     *
     * @param bool $global
     * @return self
     */
    public function setGlobal($global)
    {
        $this->global = $global;
        return $this;
    }
}

