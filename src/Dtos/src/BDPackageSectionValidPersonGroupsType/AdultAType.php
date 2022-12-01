<?php

namespace Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType;

/**
 * Class representing AdultAType
 */
class AdultAType
{
    /**
     * @var bool $valid
     */
    private $valid = null;

    public function __construct(bool $valid = null)
    {
        $this->valid = $valid;
    }

    /**
     * Gets as valid
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Sets a new valid
     *
     * @param bool $valid
     * @return self
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }
}

