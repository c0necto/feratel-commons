<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CartItemAccommodationType
 *
 *
 * XSD Type: CartItemAccommodationType
 */
class CartItemAccommodationType
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
     * @var \DateTime $to
     */
    private $to = null;

    /**
     * @var int $adults
     */
    private $adults = null;

    /**
     * A comma separated list of ages of the children. (e.g. "3,4,4,6,12")
     *
     * @var string $childrenAges
     */
    private $childrenAges = null;

    /**
     * @var string $mealCode
     */
    private $mealCode = null;

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
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var string $itemName
     */
    private $itemName = null;

    /**
     * @var float $itemPrice
     */
    private $itemPrice = null;

    public function __construct(string $itemId = null, \DateTime $from = null, \DateTime $to = null, int $adults = null, string $childrenAges = null, string $mealCode = null, string $guestSettlerCode = null, string $paymentType = null, string $paymentMethod = null, int $numberOfItems = null, string $itemName = null, float $itemPrice = null)
    {
        $this->itemId = $itemId;
        $this->from = $from;
        $this->to = $to;
        $this->adults = $adults;
        $this->childrenAges = $childrenAges;
        $this->mealCode = $mealCode;
        $this->guestSettlerCode = $guestSettlerCode;
        $this->paymentType = $paymentType;
        $this->paymentMethod = $paymentMethod;
        $this->numberOfItems = $numberOfItems;
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
     * Gets as to
     *
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \DateTime $to
     * @return self
     */
    public function setTo(\DateTime $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Gets as adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * Sets a new adults
     *
     * @param int $adults
     * @return self
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * Gets as childrenAges
     *
     * A comma separated list of ages of the children. (e.g. "3,4,4,6,12")
     *
     * @return string
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }

    /**
     * Sets a new childrenAges
     *
     * A comma separated list of ages of the children. (e.g. "3,4,4,6,12")
     *
     * @param string $childrenAges
     * @return self
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    /**
     * Gets as mealCode
     *
     * @return string
     */
    public function getMealCode()
    {
        return $this->mealCode;
    }

    /**
     * Sets a new mealCode
     *
     * @param string $mealCode
     * @return self
     */
    public function setMealCode($mealCode)
    {
        $this->mealCode = $mealCode;
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

