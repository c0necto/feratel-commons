<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLGetDeletedAddressesType
 *
 *
 * XSD Type: NLGetDeletedAddressesType
 */
class NLGetDeletedAddressesType
{
    /**
     * @var \DateTime $changedDate
     */
    private $changedDate = null;

    public function __construct(\DateTime $changedDate = null)
    {
        $this->changedDate = $changedDate;
    }

    /**
     * Gets as changedDate
     *
     * @return \DateTime
     */
    public function getChangedDate()
    {
        return $this->changedDate;
    }

    /**
     * Sets a new changedDate
     *
     * @param \DateTime $changedDate
     * @return self
     */
    public function setChangedDate(\DateTime $changedDate)
    {
        $this->changedDate = $changedDate;
        return $this;
    }
}

