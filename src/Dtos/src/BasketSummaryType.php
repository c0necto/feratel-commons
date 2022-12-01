<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasketSummaryType
 *
 *
 * XSD Type: BasketSummaryType
 */
class BasketSummaryType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $cancellationInsurance
     */
    private $cancellationInsurance = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $bookingFee
     */
    private $bookingFee = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $prePayment
     */
    private $prePayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $finalPayment
     */
    private $finalPayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $sPPayment
     */
    private $sPPayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryPromotionCodeType $promotionCode
     */
    private $promotionCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryTotalPaymentType $totalPayment
     */
    private $totalPayment = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $cancellationFee
     */
    private $cancellationFee = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $cancellationInsurance = null, \Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $bookingFee = null, \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $prePayment = null, \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $finalPayment = null, \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $sPPayment = null, \Conecto\FeratelDsi\Dtos\BasketSummaryPromotionCodeType $promotionCode = null, \Conecto\FeratelDsi\Dtos\BasketSummaryTotalPaymentType $totalPayment = null, \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $cancellationFee = null)
    {
        $this->cancellationInsurance = $cancellationInsurance;
        $this->bookingFee = $bookingFee;
        $this->prePayment = $prePayment;
        $this->finalPayment = $finalPayment;
        $this->sPPayment = $sPPayment;
        $this->promotionCode = $promotionCode;
        $this->totalPayment = $totalPayment;
        $this->cancellationFee = $cancellationFee;
    }

    /**
     * Gets as cancellationInsurance
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType
     */
    public function getCancellationInsurance()
    {
        return $this->cancellationInsurance;
    }

    /**
     * Sets a new cancellationInsurance
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $cancellationInsurance
     * @return self
     */
    public function setCancellationInsurance(\Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $cancellationInsurance)
    {
        $this->cancellationInsurance = $cancellationInsurance;
        return $this;
    }

    /**
     * Gets as bookingFee
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType
     */
    public function getBookingFee()
    {
        return $this->bookingFee;
    }

    /**
     * Sets a new bookingFee
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $bookingFee
     * @return self
     */
    public function setBookingFee(\Conecto\FeratelDsi\Dtos\BasketSummaryFeePaymentType $bookingFee)
    {
        $this->bookingFee = $bookingFee;
        return $this;
    }

    /**
     * Gets as prePayment
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType
     */
    public function getPrePayment()
    {
        return $this->prePayment;
    }

    /**
     * Sets a new prePayment
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $prePayment
     * @return self
     */
    public function setPrePayment(\Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $prePayment)
    {
        $this->prePayment = $prePayment;
        return $this;
    }

    /**
     * Gets as finalPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType
     */
    public function getFinalPayment()
    {
        return $this->finalPayment;
    }

    /**
     * Sets a new finalPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $finalPayment
     * @return self
     */
    public function setFinalPayment(\Conecto\FeratelDsi\Dtos\BasketSummaryFinalPaymentType $finalPayment)
    {
        $this->finalPayment = $finalPayment;
        return $this;
    }

    /**
     * Gets as sPPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType
     */
    public function getSPPayment()
    {
        return $this->sPPayment;
    }

    /**
     * Sets a new sPPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $sPPayment
     * @return self
     */
    public function setSPPayment(\Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $sPPayment)
    {
        $this->sPPayment = $sPPayment;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryPromotionCodeType
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryPromotionCodeType $promotionCode
     * @return self
     */
    public function setPromotionCode(?\Conecto\FeratelDsi\Dtos\BasketSummaryPromotionCodeType $promotionCode = null)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * Gets as totalPayment
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryTotalPaymentType
     */
    public function getTotalPayment()
    {
        return $this->totalPayment;
    }

    /**
     * Sets a new totalPayment
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryTotalPaymentType $totalPayment
     * @return self
     */
    public function setTotalPayment(\Conecto\FeratelDsi\Dtos\BasketSummaryTotalPaymentType $totalPayment)
    {
        $this->totalPayment = $totalPayment;
        return $this;
    }

    /**
     * Gets as cancellationFee
     *
     * @return \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType
     */
    public function getCancellationFee()
    {
        return $this->cancellationFee;
    }

    /**
     * Sets a new cancellationFee
     *
     * @param \Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $cancellationFee
     * @return self
     */
    public function setCancellationFee(?\Conecto\FeratelDsi\Dtos\BasketSummaryBasePaymentType $cancellationFee = null)
    {
        $this->cancellationFee = $cancellationFee;
        return $this;
    }
}

