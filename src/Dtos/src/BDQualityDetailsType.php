<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDQualityDetailsType
 *
 *
 * XSD Type: BDQualityDetailsType
 */
class BDQualityDetailsType
{
    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var float $contentScore
     */
    private $contentScore = null;

    /**
     * @var int $bestPrice
     */
    private $bestPrice = null;

    /**
     * @var int $availUpdCheck
     */
    private $availUpdCheck = null;

    public function __construct(\DateTime $changeDate = null, float $contentScore = null, int $bestPrice = null, int $availUpdCheck = null)
    {
        $this->changeDate = $changeDate;
        $this->contentScore = $contentScore;
        $this->bestPrice = $bestPrice;
        $this->availUpdCheck = $availUpdCheck;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
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

    /**
     * Gets as bestPrice
     *
     * @return int
     */
    public function getBestPrice()
    {
        return $this->bestPrice;
    }

    /**
     * Sets a new bestPrice
     *
     * @param int $bestPrice
     * @return self
     */
    public function setBestPrice($bestPrice)
    {
        $this->bestPrice = $bestPrice;
        return $this;
    }

    /**
     * Gets as availUpdCheck
     *
     * @return int
     */
    public function getAvailUpdCheck()
    {
        return $this->availUpdCheck;
    }

    /**
     * Sets a new availUpdCheck
     *
     * @param int $availUpdCheck
     * @return self
     */
    public function setAvailUpdCheck($availUpdCheck)
    {
        $this->availUpdCheck = $availUpdCheck;
        return $this;
    }
}

