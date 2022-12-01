<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RatingType
 *
 *
 * XSD Type: RatingType
 */
class RatingType
{
    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var int $totalRatings
     */
    private $totalRatings = null;

    /**
     * @var int $recommended
     */
    private $recommended = null;

    /**
     * @var float $satisfaction
     */
    private $satisfaction = null;

    /**
     * @var float $contentScore
     */
    private $contentScore = null;

    public function __construct(float $value = null, int $totalRatings = null, int $recommended = null, float $satisfaction = null, float $contentScore = null)
    {
        $this->value = $value;
        $this->totalRatings = $totalRatings;
        $this->recommended = $recommended;
        $this->satisfaction = $satisfaction;
        $this->contentScore = $contentScore;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as totalRatings
     *
     * @return int
     */
    public function getTotalRatings()
    {
        return $this->totalRatings;
    }

    /**
     * Sets a new totalRatings
     *
     * @param int $totalRatings
     * @return self
     */
    public function setTotalRatings($totalRatings)
    {
        $this->totalRatings = $totalRatings;
        return $this;
    }

    /**
     * Gets as recommended
     *
     * @return int
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * Sets a new recommended
     *
     * @param int $recommended
     * @return self
     */
    public function setRecommended($recommended)
    {
        $this->recommended = $recommended;
        return $this;
    }

    /**
     * Gets as satisfaction
     *
     * @return float
     */
    public function getSatisfaction()
    {
        return $this->satisfaction;
    }

    /**
     * Sets a new satisfaction
     *
     * @param float $satisfaction
     * @return self
     */
    public function setSatisfaction($satisfaction)
    {
        $this->satisfaction = $satisfaction;
        return $this;
    }

    /**
     * Gets as contentScore
     *
     * @return float
     */
    public function getContentScore()
    {
        return $this->contentScore;
    }

    /**
     * Sets a new contentScore
     *
     * @param float $contentScore
     * @return self
     */
    public function setContentScore($contentScore)
    {
        $this->contentScore = $contentScore;
        return $this;
    }
}

