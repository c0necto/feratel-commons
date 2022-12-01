<?php

namespace Conecto\FeratelDsi\Dtos\BDAdditionalPriceType;

/**
 * Class representing RangeAType
 */
class RangeAType
{
    /**
     * @var float $from
     */
    private $from = null;

    /**
     * @var float $to
     */
    private $to = null;

    /**
     * @var float $average
     */
    private $average = null;

    /**
     * @var float $insteadFrom
     */
    private $insteadFrom = null;

    /**
     * @var float $insteadTo
     */
    private $insteadTo = null;

    /**
     * @var float $insteadAverage
     */
    private $insteadAverage = null;

    public function __construct(float $from = null, float $to = null, float $average = null, float $insteadFrom = null, float $insteadTo = null, float $insteadAverage = null)
    {
        $this->from = $from;
        $this->to = $to;
        $this->average = $average;
        $this->insteadFrom = $insteadFrom;
        $this->insteadTo = $insteadTo;
        $this->insteadAverage = $insteadAverage;
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

    /**
     * Gets as average
     *
     * @return float
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * Sets a new average
     *
     * @param float $average
     * @return self
     */
    public function setAverage($average)
    {
        $this->average = $average;
        return $this;
    }

    /**
     * Gets as insteadFrom
     *
     * @return float
     */
    public function getInsteadFrom()
    {
        return $this->insteadFrom;
    }

    /**
     * Sets a new insteadFrom
     *
     * @param float $insteadFrom
     * @return self
     */
    public function setInsteadFrom($insteadFrom)
    {
        $this->insteadFrom = $insteadFrom;
        return $this;
    }

    /**
     * Gets as insteadTo
     *
     * @return float
     */
    public function getInsteadTo()
    {
        return $this->insteadTo;
    }

    /**
     * Sets a new insteadTo
     *
     * @param float $insteadTo
     * @return self
     */
    public function setInsteadTo($insteadTo)
    {
        $this->insteadTo = $insteadTo;
        return $this;
    }

    /**
     * Gets as insteadAverage
     *
     * @return float
     */
    public function getInsteadAverage()
    {
        return $this->insteadAverage;
    }

    /**
     * Sets a new insteadAverage
     *
     * @param float $insteadAverage
     * @return self
     */
    public function setInsteadAverage($insteadAverage)
    {
        $this->insteadAverage = $insteadAverage;
        return $this;
    }
}

