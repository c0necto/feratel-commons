<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDCancellationPaymentTemplateType
 *
 *
 * XSD Type: BDCancellationPaymentTemplateType
 */
class BDCancellationPaymentTemplateType
{
    /**
     * @var \DateTime $validFrom
     */
    private $validFrom = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     */
    private $periods = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationInformationAType $cancellationInformation
     */
    private $cancellationInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationFeeAType[] $cancellationFee
     */
    private $cancellationFee = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentInformationAType $paymentInformation
     */
    private $paymentInformation = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentMethodsAType $paymentMethods
     */
    private $paymentMethods = null;

    public function __construct(\DateTime $validFrom = null, \DateTime $changeDate = null, string $type = null, string $name = null, string $id = null, array $periods = null, \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationInformationAType $cancellationInformation = null, array $cancellationFee = null, \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentInformationAType $paymentInformation = null, \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentMethodsAType $paymentMethods = null)
    {
        $this->validFrom = $validFrom;
        $this->changeDate = $changeDate;
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->periods = $periods;
        $this->cancellationInformation = $cancellationInformation;
        $this->cancellationFee = $cancellationFee;
        $this->paymentInformation = $paymentInformation;
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * Gets as validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom
     *
     * @param \DateTime $validFrom
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
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
     * Adds as period
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period
     */
    public function addToPeriods(\Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType $period)
    {
        $this->periods[] = $period;
        return $this;
    }

    /**
     * isset periods
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriods($index)
    {
        return isset($this->periods[$index]);
    }

    /**
     * unset periods
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriods($index)
    {
        unset($this->periods[$index]);
    }

    /**
     * Gets as periods
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[]
     */
    public function getPeriods()
    {
        return $this->periods;
    }

    /**
     * Sets a new periods
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPeriodListType\PeriodAType[] $periods
     * @return self
     */
    public function setPeriods(array $periods = null)
    {
        $this->periods = $periods;
        return $this;
    }

    /**
     * Gets as cancellationInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationInformationAType
     */
    public function getCancellationInformation()
    {
        return $this->cancellationInformation;
    }

    /**
     * Sets a new cancellationInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationInformationAType $cancellationInformation
     * @return self
     */
    public function setCancellationInformation(\Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationInformationAType $cancellationInformation)
    {
        $this->cancellationInformation = $cancellationInformation;
        return $this;
    }

    /**
     * Adds as cancellationFee
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationFeeAType $cancellationFee
     */
    public function addToCancellationFee(\Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationFeeAType $cancellationFee)
    {
        $this->cancellationFee[] = $cancellationFee;
        return $this;
    }

    /**
     * isset cancellationFee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationFee($index)
    {
        return isset($this->cancellationFee[$index]);
    }

    /**
     * unset cancellationFee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationFee($index)
    {
        unset($this->cancellationFee[$index]);
    }

    /**
     * Gets as cancellationFee
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationFeeAType[]
     */
    public function getCancellationFee()
    {
        return $this->cancellationFee;
    }

    /**
     * Sets a new cancellationFee
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\CancellationFeeAType[] $cancellationFee
     * @return self
     */
    public function setCancellationFee(array $cancellationFee)
    {
        $this->cancellationFee = $cancellationFee;
        return $this;
    }

    /**
     * Gets as paymentInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentInformationAType
     */
    public function getPaymentInformation()
    {
        return $this->paymentInformation;
    }

    /**
     * Sets a new paymentInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentInformationAType $paymentInformation
     * @return self
     */
    public function setPaymentInformation(\Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentInformationAType $paymentInformation)
    {
        $this->paymentInformation = $paymentInformation;
        return $this;
    }

    /**
     * Gets as paymentMethods
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentMethodsAType
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentMethodsAType $paymentMethods
     * @return self
     */
    public function setPaymentMethods(\Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType\PaymentMethodsAType $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
}

