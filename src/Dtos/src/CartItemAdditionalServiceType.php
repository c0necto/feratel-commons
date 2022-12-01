<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CartItemAdditionalServiceType
 *
 *
 * XSD Type: CartItemAdditionalServiceType
 */
class CartItemAdditionalServiceType
{
    /**
     * @var string $itemId
     */
    private $itemId = null;

    /**
     * @var \DateTime $from
     */
    private $from = null;

    /**
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * @var string $durationType
     */
    private $durationType = null;

    /**
     * @var int $durationValue
     */
    private $durationValue = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var string $guestSettlerCode
     */
    private $guestSettlerCode = null;

    /**
     * @var string $paymentType
     */
    private $paymentType = null;

    /**
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * @var string $itemName
     */
    private $itemName = null;

    /**
     * @var float $itemPrice
     */
    private $itemPrice = null;

    public function __construct(string $itemId = null, \DateTime $from = null, \DateTime $startTime = null, string $durationType = null, int $durationValue = null, int $numberOfItems = null, string $guestSettlerCode = null, string $paymentType = null, string $paymentMethod = null, string $itemName = null, float $itemPrice = null)
    {
        $this->itemId = $itemId;
        $this->from = $from;
        $this->startTime = $startTime;
        $this->durationType = $durationType;
        $this->durationValue = $durationValue;
        $this->numberOfItems = $numberOfItems;
        $this->guestSettlerCode = $guestSettlerCode;
        $this->paymentType = $paymentType;
        $this->paymentMethod = $paymentMethod;
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
    }

    /**
     * Gets as itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Sets a new itemId
     *
     * @param string $itemId
     * @return self
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Gets as from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \DateTime $from
     * @return self
     */
    public function setFrom(\DateTime $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as durationType
     *
     * @return string
     */
    public function getDurationType()
    {
        return $this->durationType;
    }

    /**
     * Sets a new durationType
     *
     * @param string $durationType
     * @return self
     */
    public function setDurationType($durationType)
    {
        $this->durationType = $durationType;
        return $this;
    }

    /**
     * Gets as durationValue
     *
     * @return int
     */
    public function getDurationValue()
    {
        return $this->durationValue;
    }

    /**
     * Sets a new durationValue
     *
     * @param int $durationValue
     * @return self
     */
    public function setDurationValue($durationValue)
    {
        $this->durationValue = $durationValue;
        return $this;
    }

    /**
     * Gets as numberOfItems
     *
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * Sets a new numberOfItems
     *
     * @param int $numberOfItems
     * @return self
     */
    public function setNumberOfItems($numberOfItems)
    {
        $this->numberOfItems = $numberOfItems;
        return $this;
    }

    /**
     * Gets as guestSettlerCode
     *
     * @return string
     */
    public function getGuestSettlerCode()
    {
        return $this->guestSettlerCode;
    }

    /**
     * Sets a new guestSettlerCode
     *
     * @param string $guestSettlerCode
     * @return self
     */
    public function setGuestSettlerCode($guestSettlerCode)
    {
        $this->guestSettlerCode = $guestSettlerCode;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Sets a new itemName
     *
     * @param string $itemName
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * Gets as itemPrice
     *
     * @return float
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Sets a new itemPrice
     *
     * @param float $itemPrice
     * @return self
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }
}

