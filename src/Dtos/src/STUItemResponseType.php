<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing STUItemResponseType
 *
 *
 * XSD Type: STUItemResponseType
 */
class STUItemResponseType
{
    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $message
     */
    private $message = null;

    public function __construct(string $status = null, string $message = null)
    {
        $this->status = $status;
        $this->message = $message;
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

