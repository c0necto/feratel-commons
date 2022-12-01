<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing InsuranceAndFeeInformationType
 *
 *
 * XSD Type: InsuranceAndFeeInformationType
 */
class InsuranceAndFeeInformationType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CancellationInsuranceType[] $cancellationInsurances
     */
    private $cancellationInsurances = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType[] $cancellationFees
     */
    private $cancellationFees = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookinFeeDetailType[] $bookingFees
     */
    private $bookingFees = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ContactDataType $insuranceData
     */
    private $insuranceData = null;

    public function __construct(array $cancellationInsurances = null, array $cancellationFees = null, array $bookingFees = null, \Conecto\FeratelDsi\Dtos\ContactDataType $insuranceData = null)
    {
        $this->cancellationInsurances = $cancellationInsurances;
        $this->cancellationFees = $cancellationFees;
        $this->bookingFees = $bookingFees;
        $this->insuranceData = $insuranceData;
    }

    /**
     * Adds as cancellationInsurance
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CancellationInsuranceType $cancellationInsurance
     */
    public function addToCancellationInsurances(\Conecto\FeratelDsi\Dtos\CancellationInsuranceType $cancellationInsurance)
    {
        $this->cancellationInsurances[] = $cancellationInsurance;
        return $this;
    }

    /**
     * isset cancellationInsurances
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationInsurances($index)
    {
        return isset($this->cancellationInsurances[$index]);
    }

    /**
     * unset cancellationInsurances
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationInsurances($index)
    {
        unset($this->cancellationInsurances[$index]);
    }

    /**
     * Gets as cancellationInsurances
     *
     * @return \Conecto\FeratelDsi\Dtos\CancellationInsuranceType[]
     */
    public function getCancellationInsurances()
    {
        return $this->cancellationInsurances;
    }

    /**
     * Sets a new cancellationInsurances
     *
     * @param \Conecto\FeratelDsi\Dtos\CancellationInsuranceType[] $cancellationInsurances
     * @return self
     */
    public function setCancellationInsurances(array $cancellationInsurances)
    {
        $this->cancellationInsurances = $cancellationInsurances;
        return $this;
    }

    /**
     * Adds as cancellationFeeDetail
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType $cancellationFeeDetail
     */
    public function addToCancellationFees(\Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType $cancellationFeeDetail)
    {
        $this->cancellationFees[] = $cancellationFeeDetail;
        return $this;
    }

    /**
     * isset cancellationFees
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationFees($index)
    {
        return isset($this->cancellationFees[$index]);
    }

    /**
     * unset cancellationFees
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationFees($index)
    {
        unset($this->cancellationFees[$index]);
    }

    /**
     * Gets as cancellationFees
     *
     * @return \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType[]
     */
    public function getCancellationFees()
    {
        return $this->cancellationFees;
    }

    /**
     * Sets a new cancellationFees
     *
     * @param \Conecto\FeratelDsi\Dtos\CancellationFeeDetailsType[] $cancellationFees
     * @return self
     */
    public function setCancellationFees(array $cancellationFees)
    {
        $this->cancellationFees = $cancellationFees;
        return $this;
    }

    /**
     * Adds as bookinFeeDetail
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BookinFeeDetailType $bookinFeeDetail
     */
    public function addToBookingFees(\Conecto\FeratelDsi\Dtos\BookinFeeDetailType $bookinFeeDetail)
    {
        $this->bookingFees[] = $bookinFeeDetail;
        return $this;
    }

    /**
     * isset bookingFees
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingFees($index)
    {
        return isset($this->bookingFees[$index]);
    }

    /**
     * unset bookingFees
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingFees($index)
    {
        unset($this->bookingFees[$index]);
    }

    /**
     * Gets as bookingFees
     *
     * @return \Conecto\FeratelDsi\Dtos\BookinFeeDetailType[]
     */
    public function getBookingFees()
    {
        return $this->bookingFees;
    }

    /**
     * Sets a new bookingFees
     *
     * @param \Conecto\FeratelDsi\Dtos\BookinFeeDetailType[] $bookingFees
     * @return self
     */
    public function setBookingFees(array $bookingFees)
    {
        $this->bookingFees = $bookingFees;
        return $this;
    }

    /**
     * Gets as insuranceData
     *
     * @return \Conecto\FeratelDsi\Dtos\ContactDataType
     */
    public function getInsuranceData()
    {
        return $this->insuranceData;
    }

    /**
     * Sets a new insuranceData
     *
     * @param \Conecto\FeratelDsi\Dtos\ContactDataType $insuranceData
     * @return self
     */
    public function setInsuranceData(?\Conecto\FeratelDsi\Dtos\ContactDataType $insuranceData = null)
    {
        $this->insuranceData = $insuranceData;
        return $this;
    }
}

