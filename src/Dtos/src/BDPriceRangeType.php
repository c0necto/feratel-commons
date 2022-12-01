<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceRangeType
 *
 *
 * XSD Type: BDPriceRangeType
 */
class BDPriceRangeType
{
    /**
     * @var int $pax
     */
    private $pax = null;

    /**
     * @var float $from
     */
    private $from = null;

    /**
     * @var float $to
     */
    private $to = null;

    public function __construct(int $pax = null, float $from = null, float $to = null)
    {
        $this->pax = $pax;
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * Gets as pax
     *
     * @return int
     */
    public function getPax()
    {
        return $this->pax;
    }

    /**
     * Sets a new pax
     *
     * @param int $pax
     * @return self
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
        return $this;
    }

    /**
     * Gets as from
     *
     * @return float
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param float $from
     * @return self
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return float
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param float $to
     * @return self
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }
}

