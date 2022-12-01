<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ShoppingCartType
 *
 *
 * XSD Type: ShoppingCartType
 */
class ShoppingCartType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $secureValue
     */
    private $secureValue = null;

    /**
     * @var string $selectedPaymentProvider
     */
    private $selectedPaymentProvider = null;

    /**
     * @var string $refNo
     */
    private $refNo = null;

    /**
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\TransactionTypeAType $transactionType
     */
    private $transactionType = null;

    /**
     * @var string $salesPointCode
     */
    private $salesPointCode = null;

    /**
     * @var string $productGroup
     */
    private $productGroup = null;

    /**
     * @var string $guestSettlerCode
     */
    private $guestSettlerCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType $content
     */
    private $content = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\GuestAType $guest
     */
    private $guest = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\CurrencyAType $currency
     */
    private $currency = null;

    public function __construct(string $id = null, string $secureValue = null, string $selectedPaymentProvider = null, string $refNo = null, \DateTime $timestamp = null, string $dBCode = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\TransactionTypeAType $transactionType = null, string $salesPointCode = null, string $productGroup = null, string $guestSettlerCode = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType $content = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\GuestAType $guest = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\CurrencyAType $currency = null)
    {
        $this->id = $id;
        $this->secureValue = $secureValue;
        $this->selectedPaymentProvider = $selectedPaymentProvider;
        $this->refNo = $refNo;
        $this->timestamp = $timestamp;
        $this->dBCode = $dBCode;
        $this->transactionType = $transactionType;
        $this->salesPointCode = $salesPointCode;
        $this->productGroup = $productGroup;
        $this->guestSettlerCode = $guestSettlerCode;
        $this->content = $content;
        $this->guest = $guest;
        $this->currency = $currency;
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
     * Gets as secureValue
     *
     * @return string
     */
    public function getSecureValue()
    {
        return $this->secureValue;
    }

    /**
     * Sets a new secureValue
     *
     * @param string $secureValue
     * @return self
     */
    public function setSecureValue($secureValue)
    {
        $this->secureValue = $secureValue;
        return $this;
    }

    /**
     * Gets as selectedPaymentProvider
     *
     * @return string
     */
    public function getSelectedPaymentProvider()
    {
        return $this->selectedPaymentProvider;
    }

    /**
     * Sets a new selectedPaymentProvider
     *
     * @param string $selectedPaymentProvider
     * @return self
     */
    public function setSelectedPaymentProvider($selectedPaymentProvider)
    {
        $this->selectedPaymentProvider = $selectedPaymentProvider;
        return $this;
    }

    /**
     * Gets as refNo
     *
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * Sets a new refNo
     *
     * @param string $refNo
     * @return self
     */
    public function setRefNo($refNo)
    {
        $this->refNo = $refNo;
        return $this;
    }

    /**
     * Gets as timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
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
     * Gets as transactionType
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\TransactionTypeAType
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Sets a new transactionType
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\TransactionTypeAType $transactionType
     * @return self
     */
    public function setTransactionType(\Conecto\FeratelDsi\Dtos\ShoppingCartType\TransactionTypeAType $transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * Gets as salesPointCode
     *
     * @return string
     */
    public function getSalesPointCode()
    {
        return $this->salesPointCode;
    }

    /**
     * Sets a new salesPointCode
     *
     * @param string $salesPointCode
     * @return self
     */
    public function setSalesPointCode($salesPointCode)
    {
        $this->salesPointCode = $salesPointCode;
        return $this;
    }

    /**
     * Gets as productGroup
     *
     * @return string
     */
    public function getProductGroup()
    {
        return $this->productGroup;
    }

    /**
     * Sets a new productGroup
     *
     * @param string $productGroup
     * @return self
     */
    public function setProductGroup($productGroup)
    {
        $this->productGroup = $productGroup;
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
     * Gets as content
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType $content
     * @return self
     */
    public function setContent(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as guest
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\GuestAType
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\GuestAType $guest
     * @return self
     */
    public function setGuest(\Conecto\FeratelDsi\Dtos\ShoppingCartType\GuestAType $guest)
    {
        $this->guest = $guest;
        return $this;
    }

    /**
     * Gets as currency
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\CurrencyAType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\CurrencyAType $currency
     * @return self
     */
    public function setCurrency(\Conecto\FeratelDsi\Dtos\ShoppingCartType\CurrencyAType $currency)
    {
        $this->currency = $currency;
        return $this;
    }
}

