<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageCalculationType
 *
 *
 * XSD Type: BDPackageCalculationType
 */
class BDPackageCalculationType
{
    /**
     * @var bool $vTIncluded
     */
    private $vTIncluded = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageCalculationType\BookingFeeAType $bookingFee
     */
    private $bookingFee = null;

    /**
     * @var bool $cancellationInsuranceIncluded
     */
    private $cancellationInsuranceIncluded = null;

    public function __construct(bool $vTIncluded = null, \Conecto\FeratelDsi\Dtos\BDPackageCalculationType\BookingFeeAType $bookingFee = null, bool $cancellationInsuranceIncluded = null)
    {
        $this->vTIncluded = $vTIncluded;
        $this->bookingFee = $bookingFee;
        $this->cancellationInsuranceIncluded = $cancellationInsuranceIncluded;
    }

    /**
     * Gets as vTIncluded
     *
     * @return bool
     */
    public function getVTIncluded()
    {
        return $this->vTIncluded;
    }

    /**
     * Sets a new vTIncluded
     *
     * @param bool $vTIncluded
     * @return self
     */
    public function setVTIncluded($vTIncluded)
    {
        $this->vTIncluded = $vTIncluded;
        return $this;
    }

    /**
     * Gets as bookingFee
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageCalculationType\BookingFeeAType
     */
    public function getBookingFee()
    {
        return $this->bookingFee;
    }

    /**
     * Sets a new bookingFee
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageCalculationType\BookingFeeAType $bookingFee
     * @return self
     */
    public function setBookingFee(?\Conecto\FeratelDsi\Dtos\BDPackageCalculationType\BookingFeeAType $bookingFee = null)
    {
        $this->bookingFee = $bookingFee;
        return $this;
    }

    /**
     * Gets as cancellationInsuranceIncluded
     *
     * @return bool
     */
    public function getCancellationInsuranceIncluded()
    {
        return $this->cancellationInsuranceIncluded;
    }

    /**
     * Sets a new cancellationInsuranceIncluded
     *
     * @param bool $cancellationInsuranceIncluded
     * @return self
     */
    public function setCancellationInsuranceIncluded($cancellationInsuranceIncluded)
    {
        $this->cancellationInsuranceIncluded = $cancellationInsuranceIncluded;
        return $this;
    }
}

