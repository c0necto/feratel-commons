<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RatingQuestionListType
 *
 *
 * XSD Type: RatingQuestionList
 */
class RatingQuestionListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RatingQuestionType[] $ratingQuestion
     */
    private $ratingQuestion = [
        
    ];

    public function __construct(array $ratingQuestion = null)
    {
        $this->ratingQuestion = $ratingQuestion;
    }

    /**
     * Adds as ratingQuestion
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RatingQuestionType $ratingQuestion
     */
    public function addToRatingQuestion(\Conecto\FeratelDsi\Dtos\RatingQuestionType $ratingQuestion)
    {
        $this->ratingQuestion[] = $ratingQuestion;
        return $this;
    }

    /**
     * isset ratingQuestion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatingQuestion($index)
    {
        return isset($this->ratingQuestion[$index]);
    }

    /**
     * unset ratingQuestion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatingQuestion($index)
    {
        unset($this->ratingQuestion[$index]);
    }

    /**
     * Gets as ratingQuestion
     *
     * @return \Conecto\FeratelDsi\Dtos\RatingQuestionType[]
     */
    public function getRatingQuestion()
    {
        return $this->ratingQuestion;
    }

    /**
     * Sets a new ratingQuestion
     *
     * @param \Conecto\FeratelDsi\Dtos\RatingQuestionType[] $ratingQuestion
     * @return self
     */
    public function setRatingQuestion(array $ratingQuestion = null)
    {
        $this->ratingQuestion = $ratingQuestion;
        return $this;
    }
}

