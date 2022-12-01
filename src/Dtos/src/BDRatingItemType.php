<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRatingItemType
 *
 *
 * XSD Type: BDRatingItem
 */
class BDRatingItemType
{
    /**
     * @var float $points
     */
    private $points = null;

    /**
     * @var int $satisfaction
     */
    private $satisfaction = null;

    /**
     * @var int $recommended
     */
    private $recommended = null;

    /**
     * @var string $nickname
     */
    private $nickname = null;

    /**
     * @var string $visitorTypeID
     */
    private $visitorTypeID = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \DateTime $createDate
     */
    private $createDate = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var int $travelMonth
     */
    private $travelMonth = null;

    /**
     * @var int $travelYear
     */
    private $travelYear = null;

    /**
     * @var string $userComment
     */
    private $userComment = null;

    /**
     * @var string $parentComment
     */
    private $parentComment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRatingAnswerItemType[] $answer
     */
    private $answer = [
        
    ];

    public function __construct(float $points = null, int $satisfaction = null, int $recommended = null, string $nickname = null, string $visitorTypeID = null, string $id = null, \DateTime $changeDate = null, \DateTime $createDate = null, bool $active = null, int $travelMonth = null, int $travelYear = null, string $userComment = null, string $parentComment = null, array $answer = null)
    {
        $this->points = $points;
        $this->satisfaction = $satisfaction;
        $this->recommended = $recommended;
        $this->nickname = $nickname;
        $this->visitorTypeID = $visitorTypeID;
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->createDate = $createDate;
        $this->active = $active;
        $this->travelMonth = $travelMonth;
        $this->travelYear = $travelYear;
        $this->userComment = $userComment;
        $this->parentComment = $parentComment;
        $this->answer = $answer;
    }

    /**
     * Gets as points
     *
     * @return float
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Sets a new points
     *
     * @param float $points
     * @return self
     */
    public function setPoints($points)
    {
        $this->points = $points;
        return $this;
    }

    /**
     * Gets as satisfaction
     *
     * @return int
     */
    public function getSatisfaction()
    {
        return $this->satisfaction;
    }

    /**
     * Sets a new satisfaction
     *
     * @param int $satisfaction
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
     * Gets as nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Sets a new nickname
     *
     * @param string $nickname
     * @return self
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * Gets as visitorTypeID
     *
     * @return string
     */
    public function getVisitorTypeID()
    {
        return $this->visitorTypeID;
    }

    /**
     * Sets a new visitorTypeID
     *
     * @param string $visitorTypeID
     * @return self
     */
    public function setVisitorTypeID($visitorTypeID)
    {
        $this->visitorTypeID = $visitorTypeID;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * Gets as createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Sets a new createDate
     *
     * @param \DateTime $createDate
     * @return self
     */
    public function setCreateDate(\DateTime $createDate)
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as travelMonth
     *
     * @return int
     */
    public function getTravelMonth()
    {
        return $this->travelMonth;
    }

    /**
     * Sets a new travelMonth
     *
     * @param int $travelMonth
     * @return self
     */
    public function setTravelMonth($travelMonth)
    {
        $this->travelMonth = $travelMonth;
        return $this;
    }

    /**
     * Gets as travelYear
     *
     * @return int
     */
    public function getTravelYear()
    {
        return $this->travelYear;
    }

    /**
     * Sets a new travelYear
     *
     * @param int $travelYear
     * @return self
     */
    public function setTravelYear($travelYear)
    {
        $this->travelYear = $travelYear;
        return $this;
    }

    /**
     * Gets as userComment
     *
     * @return string
     */
    public function getUserComment()
    {
        return $this->userComment;
    }

    /**
     * Sets a new userComment
     *
     * @param string $userComment
     * @return self
     */
    public function setUserComment($userComment)
    {
        $this->userComment = $userComment;
        return $this;
    }

    /**
     * Gets as parentComment
     *
     * @return string
     */
    public function getParentComment()
    {
        return $this->parentComment;
    }

    /**
     * Sets a new parentComment
     *
     * @param string $parentComment
     * @return self
     */
    public function setParentComment($parentComment)
    {
        $this->parentComment = $parentComment;
        return $this;
    }

    /**
     * Adds as answer
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRatingAnswerItemType $answer
     */
    public function addToAnswer(\Conecto\FeratelDsi\Dtos\BDRatingAnswerItemType $answer)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * isset answer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswer($index)
    {
        return isset($this->answer[$index]);
    }

    /**
     * unset answer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswer($index)
    {
        unset($this->answer[$index]);
    }

    /**
     * Gets as answer
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRatingAnswerItemType[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRatingAnswerItemType[] $answer
     * @return self
     */
    public function setAnswer(array $answer = null)
    {
        $this->answer = $answer;
        return $this;
    }
}

