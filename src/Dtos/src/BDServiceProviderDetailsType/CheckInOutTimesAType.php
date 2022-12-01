<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType;

/**
 * Class representing CheckInOutTimesAType
 */
class CheckInOutTimesAType
{
    /**
     * @var string $checkInFrom
     */
    private $checkInFrom = null;

    /**
     * @var string $checkInTo
     */
    private $checkInTo = null;

    /**
     * @var string $checkOutFrom
     */
    private $checkOutFrom = null;

    /**
     * @var string $checkOutTo
     */
    private $checkOutTo = null;

    public function __construct(string $checkInFrom = null, string $checkInTo = null, string $checkOutFrom = null, string $checkOutTo = null)
    {
        $this->checkInFrom = $checkInFrom;
        $this->checkInTo = $checkInTo;
        $this->checkOutFrom = $checkOutFrom;
        $this->checkOutTo = $checkOutTo;
    }

    /**
     * Gets as checkInFrom
     *
     * @return string
     */
    public function getCheckInFrom()
    {
        return $this->checkInFrom;
    }

    /**
     * Sets a new checkInFrom
     *
     * @param string $checkInFrom
     * @return self
     */
    public function setCheckInFrom($checkInFrom)
    {
        $this->checkInFrom = $checkInFrom;
        return $this;
    }

    /**
     * Gets as checkInTo
     *
     * @return string
     */
    public function getCheckInTo()
    {
        return $this->checkInTo;
    }

    /**
     * Sets a new checkInTo
     *
     * @param string $checkInTo
     * @return self
     */
    public function setCheckInTo($checkInTo)
    {
        $this->checkInTo = $checkInTo;
        return $this;
    }

    /**
     * Gets as checkOutFrom
     *
     * @return string
     */
    public function getCheckOutFrom()
    {
        return $this->checkOutFrom;
    }

    /**
     * Sets a new checkOutFrom
     *
     * @param string $checkOutFrom
     * @return self
     */
    public function setCheckOutFrom($checkOutFrom)
    {
        $this->checkOutFrom = $checkOutFrom;
        return $this;
    }

    /**
     * Gets as checkOutTo
     *
     * @return string
     */
    public function getCheckOutTo()
    {
        return $this->checkOutTo;
    }

    /**
     * Sets a new checkOutTo
     *
     * @param string $checkOutTo
     * @return self
     */
    public function setCheckOutTo($checkOutTo)
    {
        $this->checkOutTo = $checkOutTo;
        return $this;
    }
}

