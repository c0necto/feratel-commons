<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing STUAddressResponseType
 *
 *
 * XSD Type: STUAddressResponse
 */
class STUAddressResponseType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $message
     */
    private $message = null;

    public function __construct(string $type = null, string $companyName = null, string $status = null, string $message = null)
    {
        $this->type = $type;
        $this->companyName = $companyName;
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
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

