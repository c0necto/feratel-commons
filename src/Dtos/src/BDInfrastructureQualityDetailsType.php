<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDInfrastructureQualityDetailsType
 *
 *
 * XSD Type: BDInfrastructureQualityDetailsType
 */
class BDInfrastructureQualityDetailsType
{
    /**
     * @var float $contentScore
     */
    private $contentScore = null;

    public function __construct(float $contentScore = null)
    {
        $this->contentScore = $contentScore;
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

