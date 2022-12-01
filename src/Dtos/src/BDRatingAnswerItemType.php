<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRatingAnswerItemType
 *
 *
 * XSD Type: BDRatingAnswerItem
 */
class BDRatingAnswerItemType
{
    /**
     * @var string $questionID
     */
    private $questionID = null;

    /**
     * @var int $value
     */
    private $value = null;

    public function __construct(string $questionID = null, int $value = null)
    {
        $this->questionID = $questionID;
        $this->value = $value;
    }

    /**
     * Gets as questionID
     *
     * @return string
     */
    public function getQuestionID()
    {
        return $this->questionID;
    }

    /**
     * Sets a new questionID
     *
     * @param string $questionID
     * @return self
     */
    public function setQuestionID($questionID)
    {
        $this->questionID = $questionID;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

