<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDMetaRatingsType
 *
 *
 * XSD Type: BDMetaRatingsType
 */
class BDMetaRatingsType
{
    /**
     * @var string $ratingSystem
     */
    private $ratingSystem = null;

    /**
     * @var string $ratingCode
     */
    private $ratingCode = null;

    /**
     * @var string $partnerRatingCode
     */
    private $partnerRatingCode = null;

    /**
     * @var float $average
     */
    private $average = null;

    /**
     * @var int $count
     */
    private $count = null;

    public function __construct(string $ratingSystem = null, string $ratingCode = null, string $partnerRatingCode = null, float $average = null, int $count = null)
    {
        $this->ratingSystem = $ratingSystem;
        $this->ratingCode = $ratingCode;
        $this->partnerRatingCode = $partnerRatingCode;
        $this->average = $average;
        $this->count = $count;
    }

    /**
     * Gets as ratingSystem
     *
     * @return string
     */
    public function getRatingSystem()
    {
        return $this->ratingSystem;
    }

    /**
     * Sets a new ratingSystem
     *
     * @param string $ratingSystem
     * @return self
     */
    public function setRatingSystem($ratingSystem)
    {
        $this->ratingSystem = $ratingSystem;
        return $this;
    }

    /**
     * Gets as ratingCode
     *
     * @return string
     */
    public function getRatingCode()
    {
        return $this->ratingCode;
    }

    /**
     * Sets a new ratingCode
     *
     * @param string $ratingCode
     * @return self
     */
    public function setRatingCode($ratingCode)
    {
        $this->ratingCode = $ratingCode;
        return $this;
    }

    /**
     * Gets as partnerRatingCode
     *
     * @return string
     */
    public function getPartnerRatingCode()
    {
        return $this->partnerRatingCode;
    }

    /**
     * Sets a new partnerRatingCode
     *
     * @param string $partnerRatingCode
     * @return self
     */
    public function setPartnerRatingCode($partnerRatingCode)
    {
        $this->partnerRatingCode = $partnerRatingCode;
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
     * Gets as count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }
}

