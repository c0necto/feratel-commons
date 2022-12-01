<?php

namespace Conecto\FeratelDsi\Dtos\KeyValuesType;

use Conecto\FeratelDsi\Dtos\LocalOnlyRequestedType;

/**
 * Class representing ClassificationsAType
 */
class ClassificationsAType extends LocalOnlyRequestedType
{
    /**
     * @var bool $includeDescription
     */
    private $includeDescription = null;

    public function __construct(bool $includeDescription = null, bool $localOnly = null, bool $show = null, string $id = null)
    {
        $this->includeDescription = $includeDescription;
        parent::__construct($localOnly,$show,$id);
    }

    /**
     * Gets as includeDescription
     *
     * @return bool
     */
    public function getIncludeDescription()
    {
        return $this->includeDescription;
    }

    /**
     * Sets a new includeDescription
     *
     * @param bool $includeDescription
     * @return self
     */
    public function setIncludeDescription($includeDescription)
    {
        $this->includeDescription = $includeDescription;
        return $this;
    }
}

