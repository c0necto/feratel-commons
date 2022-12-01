<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType;

/**
 * Class representing ProductAType
 */
class ProductAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var bool $orgPaymentRequired
     */
    private $orgPaymentRequired = null;

    /**
     * @var bool $inclVT
     */
    private $inclVT = null;

    /**
     * @var int $availability
     */
    private $availability = null;

    /**
     * @var string $availabilityReference
     */
    private $availabilityReference = null;

    /**
     * @var int $searchLineNo
     */
    private $searchLineNo = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\OccupancyAType $occupancy
     */
    private $occupancy = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType[] $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation
     */
    private $paymentInformation = null;

    public function __construct(string $id = null, string $name = null, bool $orgPaymentRequired = null, bool $inclVT = null, int $availability = null, string $availabilityReference = null, int $searchLineNo = null, \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\OccupancyAType $occupancy = null, array $prices = null, \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->orgPaymentRequired = $orgPaymentRequired;
        $this->inclVT = $inclVT;
        $this->availability = $availability;
        $this->availabilityReference = $availabilityReference;
        $this->searchLineNo = $searchLineNo;
        $this->occupancy = $occupancy;
        $this->prices = $prices;
        $this->paymentInformation = $paymentInformation;
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
     * Gets as orgPaymentRequired
     *
     * @return bool
     */
    public function getOrgPaymentRequired()
    {
        return $this->orgPaymentRequired;
    }

    /**
     * Sets a new orgPaymentRequired
     *
     * @param bool $orgPaymentRequired
     * @return self
     */
    public function setOrgPaymentRequired($orgPaymentRequired)
    {
        $this->orgPaymentRequired = $orgPaymentRequired;
        return $this;
    }

    /**
     * Gets as inclVT
     *
     * @return bool
     */
    public function getInclVT()
    {
        return $this->inclVT;
    }

    /**
     * Sets a new inclVT
     *
     * @param bool $inclVT
     * @return self
     */
    public function setInclVT($inclVT)
    {
        $this->inclVT = $inclVT;
        return $this;
    }

    /**
     * Gets as availability
     *
     * @return int
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * @param int $availability
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * Gets as availabilityReference
     *
     * @return string
     */
    public function getAvailabilityReference()
    {
        return $this->availabilityReference;
    }

    /**
     * Sets a new availabilityReference
     *
     * @param string $availabilityReference
     * @return self
     */
    public function setAvailabilityReference($availabilityReference)
    {
        $this->availabilityReference = $availabilityReference;
        return $this;
    }

    /**
     * Gets as searchLineNo
     *
     * @return int
     */
    public function getSearchLineNo()
    {
        return $this->searchLineNo;
    }

    /**
     * Sets a new searchLineNo
     *
     * @param int $searchLineNo
     * @return self
     */
    public function setSearchLineNo($searchLineNo)
    {
        $this->searchLineNo = $searchLineNo;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\OccupancyAType
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\OccupancyAType $occupancy
     * @return self
     */
    public function setOccupancy(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\OccupancyAType $occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Adds as price
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType $price
     */
    public function addToPrices(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType $price)
    {
        $this->prices[] = $price;
        return $this;
    }

    /**
     * isset prices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrices($index)
    {
        return isset($this->prices[$index]);
    }

    /**
     * unset prices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrices($index)
    {
        unset($this->prices[$index]);
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType\PricesAType\PriceAType[] $prices
     * @return self
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as paymentInformation
     *
     * @return \Conecto\FeratelDsi\Dtos\PaymentInformationType
     */
    public function getPaymentInformation()
    {
        return $this->paymentInformation;
    }

    /**
     * Sets a new paymentInformation
     *
     * @param \Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation
     * @return self
     */
    public function setPaymentInformation(?\Conecto\FeratelDsi\Dtos\PaymentInformationType $paymentInformation = null)
    {
        $this->paymentInformation = $paymentInformation;
        return $this;
    }
}

