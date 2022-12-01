<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRatingAverageItemType
 *
 *
 * XSD Type: BDRatingAverageItem
 */
class BDRatingAverageItemType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var int $count
     */
    private $count = null;

    /**
     * @var float $satisfaction
     */
    private $satisfaction = null;

    /**
     * @var int $recommended
     */
    private $recommended = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRatingItemType[] $ratings
     */
    private $ratings = null;

    public function __construct(string $type = null, float $value = null, int $count = null, float $satisfaction = null, int $recommended = null, array $ratings = null)
    {
        $this->type = $type;
        $this->value = $value;
        $this->count = $count;
        $this->satisfaction = $satisfaction;
        $this->recommended = $recommended;
        $this->ratings = $ratings;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
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
     * Adds as rating
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRatingItemType $rating
     */
    public function addToRatings(\Conecto\FeratelDsi\Dtos\BDRatingItemType $rating)
    {
        $this->ratings[] = $rating;
        return $this;
    }

    /**
     * isset ratings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatings($index)
    {
        return isset($this->ratings[$index]);
    }

    /**
     * unset ratings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatings($index)
    {
        unset($this->ratings[$index]);
    }

    /**
     * Gets as ratings
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRatingItemType[]
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * Sets a new ratings
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRatingItemType[] $ratings
     * @return self
     */
    public function setRatings(array $ratings)
    {
        $this->ratings = $ratings;
        return $this;
    }
}

