<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CancelBookingType
 *
 *
 * XSD Type: CancelBookingType
 */
class CancelBookingType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $userId
     */
    private $userId = null;

    public function __construct(string $id = null, string $userId = null)
    {
        $this->id = $id;
        $this->userId = $userId;
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
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}

