<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RatingVisitorListType
 *
 *
 * XSD Type: RatingVisitorList
 */
class RatingVisitorListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RatingVisitorType[] $ratingVisitor
     */
    private $ratingVisitor = [
        
    ];

    public function __construct(array $ratingVisitor = null)
    {
        $this->ratingVisitor = $ratingVisitor;
    }

    /**
     * Adds as ratingVisitor
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RatingVisitorType $ratingVisitor
     */
    public function addToRatingVisitor(\Conecto\FeratelDsi\Dtos\RatingVisitorType $ratingVisitor)
    {
        $this->ratingVisitor[] = $ratingVisitor;
        return $this;
    }

    /**
     * isset ratingVisitor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatingVisitor($index)
    {
        return isset($this->ratingVisitor[$index]);
    }

    /**
     * unset ratingVisitor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatingVisitor($index)
    {
        unset($this->ratingVisitor[$index]);
    }

    /**
     * Gets as ratingVisitor
     *
     * @return \Conecto\FeratelDsi\Dtos\RatingVisitorType[]
     */
    public function getRatingVisitor()
    {
        return $this->ratingVisitor;
    }

    /**
     * Sets a new ratingVisitor
     *
     * @param \Conecto\FeratelDsi\Dtos\RatingVisitorType[] $ratingVisitor
     * @return self
     */
    public function setRatingVisitor(array $ratingVisitor = null)
    {
        $this->ratingVisitor = $ratingVisitor;
        return $this;
    }
}

