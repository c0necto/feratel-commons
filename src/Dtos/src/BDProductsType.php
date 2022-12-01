<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDProductsType
 *
 * Defines basic data elements for product level requested.
 * XSD Type: BDProductsType
 */
class BDProductsType extends BasicInfoType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDProductsType\PricesAType $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $priceDetails
     */
    private $priceDetails = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $arrivalDepartureTemplates
     */
    private $arrivalDepartureTemplates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates
     */
    private $salesRuleTemplates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates
     */
    private $cancellationPaymentTemplates = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDProductAvailabilityType $availabilities
     */
    private $availabilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $gaps
     */
    private $gaps = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BDProductsType\PricesAType $prices = null, \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $priceDetails = null, \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $arrivalDepartureTemplates = null, \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates = null, \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates = null, \Conecto\FeratelDsi\Dtos\BDProductAvailabilityType $availabilities = null, \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $gaps = null, \Conecto\FeratelDsi\Dtos\BasicInfoType\DetailsAType $details = null, \Conecto\FeratelDsi\Dtos\BasicSystemDocumentElementType $documents = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementLinksType $links = null)
    {
        $this->prices = $prices;
        $this->priceDetails = $priceDetails;
        $this->arrivalDepartureTemplates = $arrivalDepartureTemplates;
        $this->salesRuleTemplates = $salesRuleTemplates;
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
        $this->availabilities = $availabilities;
        $this->gaps = $gaps;
        parent::__construct($details,$documents,$descriptions,$links);
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BDProductsType\PricesAType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BDProductsType\PricesAType $prices
     * @return self
     */
    public function setPrices(?\Conecto\FeratelDsi\Dtos\BDProductsType\PricesAType $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * Gets as priceDetails
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * Sets a new priceDetails
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $priceDetails
     * @return self
     */
    public function setPriceDetails(?\Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $priceDetails = null)
    {
        $this->priceDetails = $priceDetails;
        return $this;
    }

    /**
     * Gets as arrivalDepartureTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType
     */
    public function getArrivalDepartureTemplates()
    {
        return $this->arrivalDepartureTemplates;
    }

    /**
     * Sets a new arrivalDepartureTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $arrivalDepartureTemplates
     * @return self
     */
    public function setArrivalDepartureTemplates(?\Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $arrivalDepartureTemplates = null)
    {
        $this->arrivalDepartureTemplates = $arrivalDepartureTemplates;
        return $this;
    }

    /**
     * Gets as salesRuleTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType
     */
    public function getSalesRuleTemplates()
    {
        return $this->salesRuleTemplates;
    }

    /**
     * Sets a new salesRuleTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates
     * @return self
     */
    public function setSalesRuleTemplates(?\Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $salesRuleTemplates = null)
    {
        $this->salesRuleTemplates = $salesRuleTemplates;
        return $this;
    }

    /**
     * Gets as cancellationPaymentTemplates
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType
     */
    public function getCancellationPaymentTemplates()
    {
        return $this->cancellationPaymentTemplates;
    }

    /**
     * Sets a new cancellationPaymentTemplates
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates
     * @return self
     */
    public function setCancellationPaymentTemplates(?\Conecto\FeratelDsi\Dtos\BasicSChPeriodicElementType $cancellationPaymentTemplates = null)
    {
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
        return $this;
    }

    /**
     * Gets as availabilities
     *
     * @return \Conecto\FeratelDsi\Dtos\BDProductAvailabilityType
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Sets a new availabilities
     *
     * @param \Conecto\FeratelDsi\Dtos\BDProductAvailabilityType $availabilities
     * @return self
     */
    public function setAvailabilities(?\Conecto\FeratelDsi\Dtos\BDProductAvailabilityType $availabilities = null)
    {
        $this->availabilities = $availabilities;
        return $this;
    }

    /**
     * Gets as gaps
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType
     */
    public function getGaps()
    {
        return $this->gaps;
    }

    /**
     * Sets a new gaps
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $gaps
     * @return self
     */
    public function setGaps(?\Conecto\FeratelDsi\Dtos\BasicPeriodicElementType $gaps = null)
    {
        $this->gaps = $gaps;
        return $this;
    }
}

