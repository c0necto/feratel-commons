<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ReadTransactionsType
 *
 *
 * XSD Type: ReadTransactionsType
 */
class ReadTransactionsType
{
    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var string $dateType
     */
    private $dateType = null;

    /**
     * @var \DateTime $from
     */
    private $from = null;

    /**
     * @var \DateTime $to
     */
    private $to = null;

    /**
     * @var string $dbCode
     */
    private $dbCode = null;

    /**
     * @var string $dataOwner
     */
    private $dataOwner = null;

    /**
     * @var string $guestEmail
     */
    private $guestEmail = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var bool $includePriceDetails
     */
    private $includePriceDetails = null;

    /**
     * @var bool $includePaymentDetails
     */
    private $includePaymentDetails = null;

    /**
     * @var bool $includeCancellationDetails
     */
    private $includeCancellationDetails = null;

    public function __construct(string $salesChannelId = null, string $dateType = null, \DateTime $from = null, \DateTime $to = null, string $dbCode = null, string $dataOwner = null, string $guestEmail = null, string $type = null, bool $includePriceDetails = null, bool $includePaymentDetails = null, bool $includeCancellationDetails = null)
    {
        $this->salesChannelId = $salesChannelId;
        $this->dateType = $dateType;
        $this->from = $from;
        $this->to = $to;
        $this->dbCode = $dbCode;
        $this->dataOwner = $dataOwner;
        $this->guestEmail = $guestEmail;
        $this->type = $type;
        $this->includePriceDetails = $includePriceDetails;
        $this->includePaymentDetails = $includePaymentDetails;
        $this->includeCancellationDetails = $includeCancellationDetails;
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
     * Gets as dateType
     *
     * @return string
     */
    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * Sets a new dateType
     *
     * @param string $dateType
     * @return self
     */
    public function setDateType($dateType)
    {
        $this->dateType = $dateType;
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
     * Gets as dataOwner
     *
     * @return string
     */
    public function getDataOwner()
    {
        return $this->dataOwner;
    }

    /**
     * Sets a new dataOwner
     *
     * @param string $dataOwner
     * @return self
     */
    public function setDataOwner($dataOwner)
    {
        $this->dataOwner = $dataOwner;
        return $this;
    }

    /**
     * Gets as guestEmail
     *
     * @return string
     */
    public function getGuestEmail()
    {
        return $this->guestEmail;
    }

    /**
     * Sets a new guestEmail
     *
     * @param string $guestEmail
     * @return self
     */
    public function setGuestEmail($guestEmail)
    {
        $this->guestEmail = $guestEmail;
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
     * Gets as includePriceDetails
     *
     * @return bool
     */
    public function getIncludePriceDetails()
    {
        return $this->includePriceDetails;
    }

    /**
     * Sets a new includePriceDetails
     *
     * @param bool $includePriceDetails
     * @return self
     */
    public function setIncludePriceDetails($includePriceDetails)
    {
        $this->includePriceDetails = $includePriceDetails;
        return $this;
    }

    /**
     * Gets as includePaymentDetails
     *
     * @return bool
     */
    public function getIncludePaymentDetails()
    {
        return $this->includePaymentDetails;
    }

    /**
     * Sets a new includePaymentDetails
     *
     * @param bool $includePaymentDetails
     * @return self
     */
    public function setIncludePaymentDetails($includePaymentDetails)
    {
        $this->includePaymentDetails = $includePaymentDetails;
        return $this;
    }

    /**
     * Gets as includeCancellationDetails
     *
     * @return bool
     */
    public function getIncludeCancellationDetails()
    {
        return $this->includeCancellationDetails;
    }

    /**
     * Sets a new includeCancellationDetails
     *
     * @param bool $includeCancellationDetails
     * @return self
     */
    public function setIncludeCancellationDetails($includeCancellationDetails)
    {
        $this->includeCancellationDetails = $includeCancellationDetails;
        return $this;
    }
}

