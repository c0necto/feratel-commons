<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRatingAverageListType
 *
 *
 * XSD Type: BDRatingAverageList
 */
class BDRatingAverageListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType[] $ratingAverage
     */
    private $ratingAverage = [
        
    ];

    public function __construct(array $ratingAverage = null)
    {
        $this->ratingAverage = $ratingAverage;
    }

    /**
     * Adds as ratingAverage
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType $ratingAverage
     */
    public function addToRatingAverage(\Conecto\FeratelDsi\Dtos\BDRatingAverageItemType $ratingAverage)
    {
        $this->ratingAverage[] = $ratingAverage;
        return $this;
    }

    /**
     * isset ratingAverage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatingAverage($index)
    {
        return isset($this->ratingAverage[$index]);
    }

    /**
     * unset ratingAverage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatingAverage($index)
    {
        unset($this->ratingAverage[$index]);
    }

    /**
     * Gets as ratingAverage
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType[]
     */
    public function getRatingAverage()
    {
        return $this->ratingAverage;
    }

    /**
     * Sets a new ratingAverage
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRatingAverageItemType[] $ratingAverage
     * @return self
     */
    public function setRatingAverage(array $ratingAverage)
    {
        $this->ratingAverage = $ratingAverage;
        return $this;
    }
}

