<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRatingListType
 *
 *
 * XSD Type: BDRatingList
 */
class BDRatingListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRatingItemType[] $rating
     */
    private $rating = [
        
    ];

    public function __construct(array $rating = null)
    {
        $this->rating = $rating;
    }

    /**
     * Adds as rating
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRatingItemType $rating
     */
    public function addToRating(\Conecto\FeratelDsi\Dtos\BDRatingItemType $rating)
    {
        $this->rating[] = $rating;
        return $this;
    }

    /**
     * isset rating
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRating($index)
    {
        return isset($this->rating[$index]);
    }

    /**
     * unset rating
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRating($index)
    {
        unset($this->rating[$index]);
    }

    /**
     * Gets as rating
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRatingItemType[]
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRatingItemType[] $rating
     * @return self
     */
    public function setRating(array $rating)
    {
        $this->rating = $rating;
        return $this;
    }
}

