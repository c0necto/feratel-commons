<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasicElementType
 *
 *
 * XSD Type: BasicElementType
 */
class BasicElementType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    public function __construct(\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }
}

