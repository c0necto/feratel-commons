<?php

namespace Conecto\FeratelDsi\Dtos\ResponseType\ImportEventsAType;

/**
 * Class representing EventAType
 */
class EventAType
{
    /**
     * @var string $partnerId
     */
    private $partnerId = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $errorText
     */
    private $errorText = null;

    public function __construct(string $partnerId = null, string $id = null, \DateTime $changeDate = null, int $status = null, string $errorText = null)
    {
        $this->partnerId = $partnerId;
        $this->id = $id;
        $this->changeDate = $changeDate;
        $this->status = $status;
        $this->errorText = $errorText;
    }

    /**
     * Gets as partnerId
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Sets a new partnerId
     *
     * @param string $partnerId
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
        return $this;
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
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
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
     * Gets as errorText
     *
     * @return string
     */
    public function getErrorText()
    {
        return $this->errorText;
    }

    /**
     * Sets a new errorText
     *
     * @param string $errorText
     * @return self
     */
    public function setErrorText($errorText)
    {
        $this->errorText = $errorText;
        return $this;
    }
}

