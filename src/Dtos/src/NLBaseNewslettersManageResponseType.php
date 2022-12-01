<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLBaseNewslettersManageResponseType
 *
 *
 * XSD Type: NLBaseNewslettersManageResponseType
 */
class NLBaseNewslettersManageResponseType
{
    /**
     * @var string $addressId
     */
    private $addressId = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $message
     */
    private $message = null;

    public function __construct(string $addressId = null, int $status = null, string $message = null)
    {
        $this->addressId = $addressId;
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Gets as addressId
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Sets a new addressId
     *
     * @param string $addressId
     * @return self
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param int $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}

