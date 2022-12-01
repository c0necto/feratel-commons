<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RequestPoolDetailsType
 *
 *
 * XSD Type: RequestPoolDetailsType
 */
class RequestPoolDetailsType
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
     * @var string $guestComment
     */
    private $guestComment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RPOfferType[] $offers
     */
    private $offers = null;

    public function __construct(string $id = null, int $number = null, string $lastName = null, string $firstName = null, \DateTime $createDate = null, string $guestComment = null, array $offers = null)
    {
        $this->id = $id;
        $this->number = $number;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->createDate = $createDate;
        $this->guestComment = $guestComment;
        $this->offers = $offers;
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

    /**
     * Adds as offer
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RPOfferType $offer
     */
    public function addToOffers(\Conecto\FeratelDsi\Dtos\RPOfferType $offer)
    {
        $this->offers[] = $offer;
        return $this;
    }

    /**
     * isset offers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffers($index)
    {
        return isset($this->offers[$index]);
    }

    /**
     * unset offers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffers($index)
    {
        unset($this->offers[$index]);
    }

    /**
     * Gets as offers
     *
     * @return \Conecto\FeratelDsi\Dtos\RPOfferType[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * @param \Conecto\FeratelDsi\Dtos\RPOfferType[] $offers
     * @return self
     */
    public function setOffers(array $offers)
    {
        $this->offers = $offers;
        return $this;
    }
}

