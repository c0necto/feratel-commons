<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing TransactionType
 *
 *
 * XSD Type: TransactionType
 */
class TransactionType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * @var \DateTime $lastChangeDateTime
     */
    private $lastChangeDateTime = null;

    /**
     * @var string $settlerCode
     */
    private $settlerCode = null;

    /**
     * @var string $dbCode
     */
    private $dbCode = null;

    /**
     * @var int $number
     */
    private $number = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TransactionType\TypeAType $type
     */
    private $type = null;

    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TransactionType\CurrencyFactorAType $currencyFactor
     */
    private $currencyFactor = null;

    /**
     * @var string $toscLinkKey
     */
    private $toscLinkKey = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingOptionsType $bookingOptions
     */
    private $bookingOptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingDetailType[] $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingGuestType $guest
     */
    private $guest = null;

    public function __construct(string $id = null, \DateTime $createDateTime = null, \DateTime $lastChangeDateTime = null, string $settlerCode = null, string $dbCode = null, int $number = null, \Conecto\FeratelDsi\Dtos\TransactionType\TypeAType $type = null, string $salesChannelId = null, string $currencyCode = null, \Conecto\FeratelDsi\Dtos\TransactionType\CurrencyFactorAType $currencyFactor = null, string $toscLinkKey = null, \Conecto\FeratelDsi\Dtos\BookingOptionsType $bookingOptions = null, array $details = null, \Conecto\FeratelDsi\Dtos\BookingGuestType $guest = null)
    {
        $this->id = $id;
        $this->createDateTime = $createDateTime;
        $this->lastChangeDateTime = $lastChangeDateTime;
        $this->settlerCode = $settlerCode;
        $this->dbCode = $dbCode;
        $this->number = $number;
        $this->type = $type;
        $this->salesChannelId = $salesChannelId;
        $this->currencyCode = $currencyCode;
        $this->currencyFactor = $currencyFactor;
        $this->toscLinkKey = $toscLinkKey;
        $this->bookingOptions = $bookingOptions;
        $this->details = $details;
        $this->guest = $guest;
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
     * Gets as createDateTime
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;
        return $this;
    }

    /**
     * Gets as lastChangeDateTime
     *
     * @return \DateTime
     */
    public function getLastChangeDateTime()
    {
        return $this->lastChangeDateTime;
    }

    /**
     * Sets a new lastChangeDateTime
     *
     * @param \DateTime $lastChangeDateTime
     * @return self
     */
    public function setLastChangeDateTime(\DateTime $lastChangeDateTime)
    {
        $this->lastChangeDateTime = $lastChangeDateTime;
        return $this;
    }

    /**
     * Gets as settlerCode
     *
     * @return string
     */
    public function getSettlerCode()
    {
        return $this->settlerCode;
    }

    /**
     * Sets a new settlerCode
     *
     * @param string $settlerCode
     * @return self
     */
    public function setSettlerCode($settlerCode)
    {
        $this->settlerCode = $settlerCode;
        return $this;
    }

    /**
     * Gets as dbCode
     *
     * @return string
     */
    public function getDbCode()
    {
        return $this->dbCode;
    }

    /**
     * Sets a new dbCode
     *
     * @param string $dbCode
     * @return self
     */
    public function setDbCode($dbCode)
    {
        $this->dbCode = $dbCode;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return \Conecto\FeratelDsi\Dtos\TransactionType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param \Conecto\FeratelDsi\Dtos\TransactionType\TypeAType $type
     * @return self
     */
    public function setType(\Conecto\FeratelDsi\Dtos\TransactionType\TypeAType $type)
    {
        $this->type = $type;
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
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as currencyFactor
     *
     * @return \Conecto\FeratelDsi\Dtos\TransactionType\CurrencyFactorAType
     */
    public function getCurrencyFactor()
    {
        return $this->currencyFactor;
    }

    /**
     * Sets a new currencyFactor
     *
     * @param \Conecto\FeratelDsi\Dtos\TransactionType\CurrencyFactorAType $currencyFactor
     * @return self
     */
    public function setCurrencyFactor(\Conecto\FeratelDsi\Dtos\TransactionType\CurrencyFactorAType $currencyFactor)
    {
        $this->currencyFactor = $currencyFactor;
        return $this;
    }

    /**
     * Gets as toscLinkKey
     *
     * @return string
     */
    public function getToscLinkKey()
    {
        return $this->toscLinkKey;
    }

    /**
     * Sets a new toscLinkKey
     *
     * @param string $toscLinkKey
     * @return self
     */
    public function setToscLinkKey($toscLinkKey)
    {
        $this->toscLinkKey = $toscLinkKey;
        return $this;
    }

    /**
     * Gets as bookingOptions
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingOptionsType
     */
    public function getBookingOptions()
    {
        return $this->bookingOptions;
    }

    /**
     * Sets a new bookingOptions
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingOptionsType $bookingOptions
     * @return self
     */
    public function setBookingOptions(\Conecto\FeratelDsi\Dtos\BookingOptionsType $bookingOptions)
    {
        $this->bookingOptions = $bookingOptions;
        return $this;
    }

    /**
     * Adds as detail
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BookingDetailType $detail
     */
    public function addToDetails(\Conecto\FeratelDsi\Dtos\BookingDetailType $detail)
    {
        $this->details[] = $detail;
        return $this;
    }

    /**
     * isset details
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetails($index)
    {
        return isset($this->details[$index]);
    }

    /**
     * unset details
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetails($index)
    {
        unset($this->details[$index]);
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingDetailType[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingDetailType[] $details
     * @return self
     */
    public function setDetails(array $details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as guest
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingGuestType
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingGuestType $guest
     * @return self
     */
    public function setGuest(\Conecto\FeratelDsi\Dtos\BookingGuestType $guest)
    {
        $this->guest = $guest;
        return $this;
    }
}

