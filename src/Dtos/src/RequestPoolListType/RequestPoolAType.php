<?php

namespace Conecto\FeratelDsi\Dtos\RequestPoolListType;

/**
 * Class representing RequestPoolAType
 */
class RequestPoolAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var int $number
     */
    private $number = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var \DateTime $createDate
     */
    private $createDate = null;

    /**
     * @var \DateTime $arrivalDate
     */
    private $arrivalDate = null;

    /**
     * @var int $lengthOfStay
     */
    private $lengthOfStay = null;

    /**
     * @var int $numAdults
     */
    private $numAdults = null;

    /**
     * @var int $numChildren
     */
    private $numChildren = null;

    /**
     * @var string $childrenAges
     */
    private $childrenAges = null;

    /**
     * @var string $guestComment
     */
    private $guestComment = null;

    public function __construct(string $id = null, int $number = null, string $lastName = null, string $firstName = null, \DateTime $createDate = null, \DateTime $arrivalDate = null, int $lengthOfStay = null, int $numAdults = null, int $numChildren = null, string $childrenAges = null, string $guestComment = null)
    {
        $this->id = $id;
        $this->number = $number;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->createDate = $createDate;
        $this->arrivalDate = $arrivalDate;
        $this->lengthOfStay = $lengthOfStay;
        $this->numAdults = $numAdults;
        $this->numChildren = $numChildren;
        $this->childrenAges = $childrenAges;
        $this->guestComment = $guestComment;
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
     * Gets as number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
     * Gets as arrivalDate
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Sets a new arrivalDate
     *
     * @param \DateTime $arrivalDate
     * @return self
     */
    public function setArrivalDate(\DateTime $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
        return $this;
    }

    /**
     * Gets as lengthOfStay
     *
     * @return int
     */
    public function getLengthOfStay()
    {
        return $this->lengthOfStay;
    }

    /**
     * Sets a new lengthOfStay
     *
     * @param int $lengthOfStay
     * @return self
     */
    public function setLengthOfStay($lengthOfStay)
    {
        $this->lengthOfStay = $lengthOfStay;
        return $this;
    }

    /**
     * Gets as numAdults
     *
     * @return int
     */
    public function getNumAdults()
    {
        return $this->numAdults;
    }

    /**
     * Sets a new numAdults
     *
     * @param int $numAdults
     * @return self
     */
    public function setNumAdults($numAdults)
    {
        $this->numAdults = $numAdults;
        return $this;
    }

    /**
     * Gets as numChildren
     *
     * @return int
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * Sets a new numChildren
     *
     * @param int $numChildren
     * @return self
     */
    public function setNumChildren($numChildren)
    {
        $this->numChildren = $numChildren;
        return $this;
    }

    /**
     * Gets as childrenAges
     *
     * @return string
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }

    /**
     * Sets a new childrenAges
     *
     * @param string $childrenAges
     * @return self
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    /**
     * Gets as guestComment
     *
     * @return string
     */
    public function getGuestComment()
    {
        return $this->guestComment;
    }

    /**
     * Sets a new guestComment
     *
     * @param string $guestComment
     * @return self
     */
    public function setGuestComment($guestComment)
    {
        $this->guestComment = $guestComment;
        return $this;
    }
}

