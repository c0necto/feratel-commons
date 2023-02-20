<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingType
 *
 *
 * XSD Type: BookingType
 */
class BookingType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $settlerCode
     */
    private $settlerCode = null;

    /**
     * @var int $number
     */
    private $number = null;

    /**
     * @var string $type
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
     * @var \Conecto\FeratelDsi\Dtos\BookingType\CurrencyFactorAType $currencyFactor
     */
    private $currencyFactor = null;

    /**
     * @var \DateTime $validUntil
     */
    private $validUntil = null;

    /**
     * @var string $depositType
     */
    private $depositType = null;

    /**
     * @var float $depositAmount
     */
    private $depositAmount = null;

    /**
     * @var \DateTime $depositDueDate
     */
    private $depositDueDate = null;

    /**
     * @var float $depositPaid
     */
    private $depositPaid = null;

    /**
     * @var \DateTime $depositPaidDate
     */
    private $depositPaidDate = null;

    /**
     * @var string $finalType
     */
    private $finalType = null;

    /**
     * @var float $finalAmount
     */
    private $finalAmount = null;

    /**
     * @var \DateTime $finalDueDate
     */
    private $finalDueDate = null;

    /**
     * @var float $finalPaid
     */
    private $finalPaid = null;

    /**
     * @var \DateTime $finalPaidDate
     */
    private $finalPaidDate = null;

    /**
     * @var string $toscLinkKey
     */
    private $toscLinkKey = null;

    /**
     * @var string $user
     */
    private $user = null;

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

    public function __construct(string $id = null, \DateTime $validUntil = null, \Conecto\FeratelDsi\Dtos\BookingOptionsType $bookingOptions = null, string $toscLinkKey = null, float $finalPaid = null, int $number = null, string $type = null, string $salesChannelId = null, string $currencyCode = null, \Conecto\FeratelDsi\Dtos\BookingType\CurrencyFactorAType $currencyFactor = null, string $settlerCode = null, float $depositAmount = null, string $depositType = null, \DateTime $depositDueDate = null, float $depositPaid = null, \DateTime $depositPaidDate = null, string $finalType = null, float $finalAmount = null, \DateTime $finalDueDate = null, \DateTime $finalPaidDate = null, string $user = null, array $details = null, \Conecto\FeratelDsi\Dtos\BookingGuestType $guest = null)
    {
        $this->id = $id;
        $this->settlerCode = $settlerCode;
        $this->number = $number;
        $this->type = $type;
        $this->salesChannelId = $salesChannelId;
        $this->currencyCode = $currencyCode;
        $this->currencyFactor = $currencyFactor;
        $this->validUntil = $validUntil;
        $this->depositType = $depositType;
        $this->depositAmount = $depositAmount;
        $this->depositDueDate = $depositDueDate;
        $this->depositPaid = $depositPaid;
        $this->depositPaidDate = $depositPaidDate;
        $this->finalType = $finalType;
        $this->finalAmount = $finalAmount;
        $this->finalDueDate = $finalDueDate;
        $this->finalPaid = $finalPaid;
        $this->finalPaidDate = $finalPaidDate;
        $this->toscLinkKey = $toscLinkKey;
        $this->user = $user;
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
     * @return \Conecto\FeratelDsi\Dtos\BookingType\CurrencyFactorAType
     */
    public function getCurrencyFactor()
    {
        return $this->currencyFactor;
    }

    /**
     * Sets a new currencyFactor
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingType\CurrencyFactorAType $currencyFactor
     * @return self
     */
    public function setCurrencyFactor(\Conecto\FeratelDsi\Dtos\BookingType\CurrencyFactorAType $currencyFactor)
    {
        $this->currencyFactor = $currencyFactor;
        return $this;
    }

    /**
     * Gets as validUntil
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Sets a new validUntil
     *
     * @param \DateTime $validUntil
     * @return self
     */
    public function setValidUntil(\DateTime $validUntil)
    {
        $this->validUntil = $validUntil;
        return $this;
    }

    /**
     * Gets as depositType
     *
     * @return string
     */
    public function getDepositType()
    {
        return $this->depositType;
    }

    /**
     * Sets a new depositType
     *
     * @param string $depositType
     * @return self
     */
    public function setDepositType($depositType)
    {
        $this->depositType = $depositType;
        return $this;
    }

    /**
     * Gets as depositAmount
     *
     * @return float
     */
    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    /**
     * Sets a new depositAmount
     *
     * @param float $depositAmount
     * @return self
     */
    public function setDepositAmount($depositAmount)
    {
        $this->depositAmount = $depositAmount;
        return $this;
    }

    /**
     * Gets as depositDueDate
     *
     * @return \DateTime
     */
    public function getDepositDueDate()
    {
        return $this->depositDueDate;
    }

    /**
     * Sets a new depositDueDate
     *
     * @param \DateTime $depositDueDate
     * @return self
     */
    public function setDepositDueDate(\DateTime $depositDueDate)
    {
        $this->depositDueDate = $depositDueDate;
        return $this;
    }

    /**
     * Gets as depositPaid
     *
     * @return float
     */
    public function getDepositPaid()
    {
        return $this->depositPaid;
    }

    /**
     * Sets a new depositPaid
     *
     * @param float $depositPaid
     * @return self
     */
    public function setDepositPaid($depositPaid)
    {
        $this->depositPaid = $depositPaid;
        return $this;
    }

    /**
     * Gets as depositPaidDate
     *
     * @return \DateTime
     */
    public function getDepositPaidDate()
    {
        return $this->depositPaidDate;
    }

    /**
     * Sets a new depositPaidDate
     *
     * @param \DateTime $depositPaidDate
     * @return self
     */
    public function setDepositPaidDate(\DateTime $depositPaidDate)
    {
        $this->depositPaidDate = $depositPaidDate;
        return $this;
    }

    /**
     * Gets as finalType
     *
     * @return string
     */
    public function getFinalType()
    {
        return $this->finalType;
    }

    /**
     * Sets a new finalType
     *
     * @param string $finalType
     * @return self
     */
    public function setFinalType($finalType)
    {
        $this->finalType = $finalType;
        return $this;
    }

    /**
     * Gets as finalAmount
     *
     * @return float
     */
    public function getFinalAmount()
    {
        return $this->finalAmount;
    }

    /**
     * Sets a new finalAmount
     *
     * @param float $finalAmount
     * @return self
     */
    public function setFinalAmount($finalAmount)
    {
        $this->finalAmount = $finalAmount;
        return $this;
    }

    /**
     * Gets as finalDueDate
     *
     * @return \DateTime
     */
    public function getFinalDueDate()
    {
        return $this->finalDueDate;
    }

    /**
     * Sets a new finalDueDate
     *
     * @param \DateTime $finalDueDate
     * @return self
     */
    public function setFinalDueDate(\DateTime $finalDueDate)
    {
        $this->finalDueDate = $finalDueDate;
        return $this;
    }

    /**
     * Gets as finalPaid
     *
     * @return float
     */
    public function getFinalPaid()
    {
        return $this->finalPaid;
    }

    /**
     * Sets a new finalPaid
     *
     * @param float $finalPaid
     * @return self
     */
    public function setFinalPaid($finalPaid)
    {
        $this->finalPaid = $finalPaid;
        return $this;
    }

    /**
     * Gets as finalPaidDate
     *
     * @return \DateTime
     */
    public function getFinalPaidDate()
    {
        return $this->finalPaidDate;
    }

    /**
     * Sets a new finalPaidDate
     *
     * @param \DateTime $finalPaidDate
     * @return self
     */
    public function setFinalPaidDate(\DateTime $finalPaidDate)
    {
        $this->finalPaidDate = $finalPaidDate;
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
     * Gets as user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param string $user
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
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

