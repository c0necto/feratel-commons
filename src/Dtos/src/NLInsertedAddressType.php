<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLInsertedAddressType
 *
 *
 * XSD Type: NLInsertedAddressType
 */
class NLInsertedAddressType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $message
     */
    private $message = null;

    public function __construct(string $id = null, string $email = null, int $status = null, string $message = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->status = $status;
        $this->message = $message;
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
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
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

