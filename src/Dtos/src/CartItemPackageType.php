<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CartItemPackageType
 *
 *
 * XSD Type: CartItemPackageType
 */
class CartItemPackageType
{
    /**
     * @var string $packageHeaderId
     */
    private $packageHeaderId = null;

    /**
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var int $durationValue
     */
    private $durationValue = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var int $adults
     */
    private $adults = null;

    /**
     * @var string $children
     */
    private $children = null;

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
     * @var \Conecto\FeratelDsi\Dtos\CartItemPackageType\SectionAType[] $section
     */
    private $section = [
        
    ];

    public function __construct(string $packageHeaderId = null, string $categoryId = null, \DateTime $startDate = null, int $durationValue = null, int $numberOfItems = null, int $adults = null, string $children = null, string $guestSettlerCode = null, string $paymentType = null, string $paymentMethod = null, array $section = null)
    {
        $this->packageHeaderId = $packageHeaderId;
        $this->categoryId = $categoryId;
        $this->startDate = $startDate;
        $this->durationValue = $durationValue;
        $this->numberOfItems = $numberOfItems;
        $this->adults = $adults;
        $this->children = $children;
        $this->guestSettlerCode = $guestSettlerCode;
        $this->paymentType = $paymentType;
        $this->paymentMethod = $paymentMethod;
        $this->section = $section;
    }

    /**
     * Gets as packageHeaderId
     *
     * @return string
     */
    public function getPackageHeaderId()
    {
        return $this->packageHeaderId;
    }

    /**
     * Sets a new packageHeaderId
     *
     * @param string $packageHeaderId
     * @return self
     */
    public function setPackageHeaderId($packageHeaderId)
    {
        $this->packageHeaderId = $packageHeaderId;
        return $this;
    }

    /**
     * Gets as categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
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
     * Gets as children
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param string $children
     * @return self
     */
    public function setChildren($children)
    {
        $this->children = $children;
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
     * Adds as section
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CartItemPackageType\SectionAType $section
     */
    public function addToSection(\Conecto\FeratelDsi\Dtos\CartItemPackageType\SectionAType $section)
    {
        $this->section[] = $section;
        return $this;
    }

    /**
     * isset section
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSection($index)
    {
        return isset($this->section[$index]);
    }

    /**
     * unset section
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSection($index)
    {
        unset($this->section[$index]);
    }

    /**
     * Gets as section
     *
     * @return \Conecto\FeratelDsi\Dtos\CartItemPackageType\SectionAType[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets a new section
     *
     * @param \Conecto\FeratelDsi\Dtos\CartItemPackageType\SectionAType[] $section
     * @return self
     */
    public function setSection(array $section)
    {
        $this->section = $section;
        return $this;
    }
}

