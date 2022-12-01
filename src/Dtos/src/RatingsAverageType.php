<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RatingsAverageType
 *
 *
 * XSD Type: RatingsAverageType
 */
class RatingsAverageType extends BasicElementType
{
    /**
     * @var string $status
     */
    private $status = null;

    public function __construct(string $status = null, \DateTime $dateFrom = null)
    {
        $this->status = $status;
        parent::__construct($dateFrom);
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

