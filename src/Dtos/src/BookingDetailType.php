<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BookingDetailType
 *
 *
 * XSD Type: BookingDetailType
 */
class BookingDetailType
{
    /**
     * @var int $weight
     */
    private $weight = null;

    /**
     * @var int $groupNumber
     */
    private $groupNumber = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @var \DateTime $timeFrom
     */
    private $timeFrom = null;

    /**
     * @var \DateTime $timeTo
     */
    private $timeTo = null;

    /**
     * @var int $unitNumber
     */
    private $unitNumber = null;

    /**
     * @var int $adultNumber
     */
    private $adultNumber = null;

    /**
     * @var int $childrenNumber
     */
    private $childrenNumber = null;

    /**
     * @var string $childrenAges
     */
    private $childrenAges = null;

    /**
     * @var string $serviceProviderId
     */
    private $serviceProviderId = null;

    /**
     * @var string $serviceProviderName
     */
    private $serviceProviderName = null;

    /**
     * @var string $serviceId
     */
    private $serviceId = null;

    /**
     * @var string $serviceName
     */
    private $serviceName = null;

    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var string $productName
     */
    private $productName = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingDetailType\PriceAType $price
     */
    private $price = null;

    /**
     * @var string $mealType
     */
    private $mealType = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingDetailType\VatAmountAType $vatAmount
     */
    private $vatAmount = null;

    /**
     * @var string $paymentType
     */
    private $paymentType = null;

    /**
     * @var string $externalTransactionDetails
     */
    private $externalTransactionDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingPriceDetailsType $priceDetails
     */
    private $priceDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingPaymentDetailsType $paymentDetails
     */
    private $paymentDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType[] $cancellationDetails
     */
    private $cancellationDetails = null;

    public function __construct(int $weight = null, int $groupNumber = null, string $type = null, int $order = null, \DateTime $dateFrom = null, \DateTime $dateTo = null, \DateTime $timeFrom = null, \DateTime $timeTo = null, int $unitNumber = null, int $adultNumber = null, int $childrenNumber = null, string $childrenAges = null, string $serviceProviderId = null, string $serviceProviderName = null, string $serviceId = null, string $serviceName = null, string $productId = null, string $productName = null, \Conecto\FeratelDsi\Dtos\BookingDetailType\PriceAType $price = null, string $mealType = null, \Conecto\FeratelDsi\Dtos\BookingDetailType\VatAmountAType $vatAmount = null, string $paymentType = null, string $externalTransactionDetails = null, \Conecto\FeratelDsi\Dtos\BookingPriceDetailsType $priceDetails = null, \Conecto\FeratelDsi\Dtos\BookingPaymentDetailsType $paymentDetails = null, array $cancellationDetails = null)
    {
        $this->weight = $weight;
        $this->groupNumber = $groupNumber;
        $this->type = $type;
        $this->order = $order;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->timeFrom = $timeFrom;
        $this->timeTo = $timeTo;
        $this->unitNumber = $unitNumber;
        $this->adultNumber = $adultNumber;
        $this->childrenNumber = $childrenNumber;
        $this->childrenAges = $childrenAges;
        $this->serviceProviderId = $serviceProviderId;
        $this->serviceProviderName = $serviceProviderName;
        $this->serviceId = $serviceId;
        $this->serviceName = $serviceName;
        $this->productId = $productId;
        $this->productName = $productName;
        $this->price = $price;
        $this->mealType = $mealType;
        $this->vatAmount = $vatAmount;
        $this->paymentType = $paymentType;
        $this->externalTransactionDetails = $externalTransactionDetails;
        $this->priceDetails = $priceDetails;
        $this->paymentDetails = $paymentDetails;
        $this->cancellationDetails = $cancellationDetails;
    }

    /**
     * Gets as weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as groupNumber
     *
     * @return int
     */
    public function getGroupNumber()
    {
        return $this->groupNumber;
    }

    /**
     * Sets a new groupNumber
     *
     * @param int $groupNumber
     * @return self
     */
    public function setGroupNumber($groupNumber)
    {
        $this->groupNumber = $groupNumber;
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
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as timeFrom
     *
     * @return \DateTime
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * Sets a new timeFrom
     *
     * @param \DateTime $timeFrom
     * @return self
     */
    public function setTimeFrom(\DateTime $timeFrom)
    {
        $this->timeFrom = $timeFrom;
        return $this;
    }

    /**
     * Gets as timeTo
     *
     * @return \DateTime
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Sets a new timeTo
     *
     * @param \DateTime $timeTo
     * @return self
     */
    public function setTimeTo(\DateTime $timeTo)
    {
        $this->timeTo = $timeTo;
        return $this;
    }

    /**
     * Gets as unitNumber
     *
     * @return int
     */
    public function getUnitNumber()
    {
        return $this->unitNumber;
    }

    /**
     * Sets a new unitNumber
     *
     * @param int $unitNumber
     * @return self
     */
    public function setUnitNumber($unitNumber)
    {
        $this->unitNumber = $unitNumber;
        return $this;
    }

    /**
     * Gets as adultNumber
     *
     * @return int
     */
    public function getAdultNumber()
    {
        return $this->adultNumber;
    }

    /**
     * Sets a new adultNumber
     *
     * @param int $adultNumber
     * @return self
     */
    public function setAdultNumber($adultNumber)
    {
        $this->adultNumber = $adultNumber;
        return $this;
    }

    /**
     * Gets as childrenNumber
     *
     * @return int
     */
    public function getChildrenNumber()
    {
        return $this->childrenNumber;
    }

    /**
     * Sets a new childrenNumber
     *
     * @param int $childrenNumber
     * @return self
     */
    public function setChildrenNumber($childrenNumber)
    {
        $this->childrenNumber = $childrenNumber;
        return $this;
    }

    /**
     * Gets as childrenAges
     *
     * @return string
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }

    /**
     * Sets a new childrenAges
     *
     * @param string $childrenAges
     * @return self
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    /**
     * Gets as serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Sets a new serviceProviderId
     *
     * @param string $serviceProviderId
     * @return self
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Gets as serviceProviderName
     *
     * @return string
     */
    public function getServiceProviderName()
    {
        return $this->serviceProviderName;
    }

    /**
     * Sets a new serviceProviderName
     *
     * @param string $serviceProviderName
     * @return self
     */
    public function setServiceProviderName($serviceProviderName)
    {
        $this->serviceProviderName = $serviceProviderName;
        return $this;
    }

    /**
     * Gets as serviceId
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Sets a new serviceId
     *
     * @param string $serviceId
     * @return self
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    /**
     * Gets as serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Sets a new serviceName
     *
     * @param string $serviceName
     * @return self
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * Gets as productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * @param string $productId
     * @return self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * Gets as productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingDetailType\PriceAType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingDetailType\PriceAType $price
     * @return self
     */
    public function setPrice(\Conecto\FeratelDsi\Dtos\BookingDetailType\PriceAType $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as mealType
     *
     * @return string
     */
    public function getMealType()
    {
        return $this->mealType;
    }

    /**
     * Sets a new mealType
     *
     * @param string $mealType
     * @return self
     */
    public function setMealType($mealType)
    {
        $this->mealType = $mealType;
        return $this;
    }

    /**
     * Gets as vatAmount
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingDetailType\VatAmountAType
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * Sets a new vatAmount
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingDetailType\VatAmountAType $vatAmount
     * @return self
     */
    public function setVatAmount(\Conecto\FeratelDsi\Dtos\BookingDetailType\VatAmountAType $vatAmount)
    {
        $this->vatAmount = $vatAmount;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as externalTransactionDetails
     *
     * @return string
     */
    public function getExternalTransactionDetails()
    {
        return $this->externalTransactionDetails;
    }

    /**
     * Sets a new externalTransactionDetails
     *
     * @param string $externalTransactionDetails
     * @return self
     */
    public function setExternalTransactionDetails($externalTransactionDetails)
    {
        $this->externalTransactionDetails = $externalTransactionDetails;
        return $this;
    }

    /**
     * Gets as priceDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingPriceDetailsType
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * Sets a new priceDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingPriceDetailsType $priceDetails
     * @return self
     */
    public function setPriceDetails(?\Conecto\FeratelDsi\Dtos\BookingPriceDetailsType $priceDetails = null)
    {
        $this->priceDetails = $priceDetails;
        return $this;
    }

    /**
     * Gets as paymentDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingPaymentDetailsType
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * Sets a new paymentDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingPaymentDetailsType $paymentDetails
     * @return self
     */
    public function setPaymentDetails(?\Conecto\FeratelDsi\Dtos\BookingPaymentDetailsType $paymentDetails = null)
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

    /**
     * Adds as cancellationInformation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType $cancellationInformation
     */
    public function addToCancellationDetails(\Conecto\FeratelDsi\Dtos\BookingCancellationInformationType $cancellationInformation)
    {
        $this->cancellationDetails[] = $cancellationInformation;
        return $this;
    }

    /**
     * isset cancellationDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationDetails($index)
    {
        return isset($this->cancellationDetails[$index]);
    }

    /**
     * unset cancellationDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationDetails($index)
    {
        unset($this->cancellationDetails[$index]);
    }

    /**
     * Gets as cancellationDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType[]
     */
    public function getCancellationDetails()
    {
        return $this->cancellationDetails;
    }

    /**
     * Sets a new cancellationDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BookingCancellationInformationType[] $cancellationDetails
     * @return self
     */
    public function setCancellationDetails(array $cancellationDetails = null)
    {
        $this->cancellationDetails = $cancellationDetails;
        return $this;
    }
}

