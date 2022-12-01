<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType;

/**
 * Class representing GuestAType
 */
class GuestAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $wishNotes
     */
    private $wishNotes = null;

    /**
     * @var string $accompaniedBy
     */
    private $accompaniedBy = null;

    /**
     * @var string $notes
     */
    private $notes = null;

    public function __construct(string $id = null, string $wishNotes = null, string $accompaniedBy = null, string $notes = null)
    {
        $this->id = $id;
        $this->wishNotes = $wishNotes;
        $this->accompaniedBy = $accompaniedBy;
        $this->notes = $notes;
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
     * Gets as wishNotes
     *
     * @return string
     */
    public function getWishNotes()
    {
        return $this->wishNotes;
    }

    /**
     * Sets a new wishNotes
     *
     * @param string $wishNotes
     * @return self
     */
    public function setWishNotes($wishNotes)
    {
        $this->wishNotes = $wishNotes;
        return $this;
    }

    /**
     * Gets as accompaniedBy
     *
     * @return string
     */
    public function getAccompaniedBy()
    {
        return $this->accompaniedBy;
    }

    /**
     * Sets a new accompaniedBy
     *
     * @param string $accompaniedBy
     * @return self
     */
    public function setAccompaniedBy($accompaniedBy)
    {
        $this->accompaniedBy = $accompaniedBy;
        return $this;
    }

    /**
     * Gets as notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * @param string $notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }
}

