<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ShowBookingType
 *
 *
 * XSD Type: ShowBookingType
 */
class ShowBookingType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $userId
     */
    private $userId = null;

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

    public function __construct(string $id = null, string $userId = null, bool $includePriceDetails = null, bool $includePaymentDetails = null, bool $includeCancellationDetails = null)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->includePriceDetails = $includePriceDetails;
        $this->includePaymentDetails = $includePaymentDetails;
        $this->includeCancellationDetails = $includeCancellationDetails;
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
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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

