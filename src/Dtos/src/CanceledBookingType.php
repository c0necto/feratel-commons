<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CanceledBookingType
 *
 *
 * XSD Type: CanceledBookingType
 */
class CanceledBookingType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $status
     */
    private $status = null;

    public function __construct(string $id = null, string $status = null)
    {
        $this->id = $id;
        $this->status = $status;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

