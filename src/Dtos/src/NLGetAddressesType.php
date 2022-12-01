<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLGetAddressesType
 *
 *
 * XSD Type: NLGetAddressesType
 */
class NLGetAddressesType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \DateTime $changedDate
     */
    private $changedDate = null;

    /**
     * @var string $newsletter
     */
    private $newsletter = null;

    /**
     * @var string $responseType
     */
    private $responseType = null;

    /**
     * @var string $status
     */
    private $status = null;

    public function __construct(string $type = null, \DateTime $changedDate = null, string $newsletter = null, string $responseType = null, string $status = null)
    {
        $this->type = $type;
        $this->changedDate = $changedDate;
        $this->newsletter = $newsletter;
        $this->responseType = $responseType;
        $this->status = $status;
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
     * Gets as changedDate
     *
     * @return \DateTime
     */
    public function getChangedDate()
    {
        return $this->changedDate;
    }

    /**
     * Sets a new changedDate
     *
     * @param \DateTime $changedDate
     * @return self
     */
    public function setChangedDate(\DateTime $changedDate)
    {
        $this->changedDate = $changedDate;
        return $this;
    }

    /**
     * Gets as newsletter
     *
     * @return string
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Sets a new newsletter
     *
     * @param string $newsletter
     * @return self
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    /**
     * Gets as responseType
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
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

