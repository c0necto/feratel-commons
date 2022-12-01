<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CountClickType
 *
 *
 * XSD Type: CountClickType
 */
class CountClickType
{
    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * @var string $countType
     */
    private $countType = null;

    /**
     * @var string $sessionId
     */
    private $sessionId = null;

    public function __construct(string $dBCode = null, string $salesChannelId = null, string $itemID = null, string $countType = null, string $sessionId = null)
    {
        $this->dBCode = $dBCode;
        $this->salesChannelId = $salesChannelId;
        $this->itemID = $itemID;
        $this->countType = $countType;
        $this->sessionId = $sessionId;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }

    /**
     * Gets as salesChannelId
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->salesChannelId;
    }

    /**
     * Sets a new salesChannelId
     *
     * @param string $salesChannelId
     * @return self
     */
    public function setSalesChannelId($salesChannelId)
    {
        $this->salesChannelId = $salesChannelId;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as countType
     *
     * @return string
     */
    public function getCountType()
    {
        return $this->countType;
    }

    /**
     * Sets a new countType
     *
     * @param string $countType
     * @return self
     */
    public function setCountType($countType)
    {
        $this->countType = $countType;
        return $this;
    }

    /**
     * Gets as sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Sets a new sessionId
     *
     * @param string $sessionId
     * @return self
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }
}

