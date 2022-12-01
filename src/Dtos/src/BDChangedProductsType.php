<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedProductsType
 *
 *
 * XSD Type: BDChangedProductsType
 */
class BDChangedProductsType
{
    /**
     * @var string $details
     */
    private $details = null;

    /**
     * @var string $documents
     */
    private $documents = null;

    /**
     * @var string $descriptions
     */
    private $descriptions = null;

    /**
     * @var string $links
     */
    private $links = null;

    /**
     * @var string $priceDetails
     */
    private $priceDetails = null;

    /**
     * @var string $arrivalDepartureTemplates
     */
    private $arrivalDepartureTemplates = null;

    /**
     * @var string $salesRuleTemplates
     */
    private $salesRuleTemplates = null;

    /**
     * @var string $availabilities
     */
    private $availabilities = null;

    /**
     * @var string $gaps
     */
    private $gaps = null;

    /**
     * @var string $cancellationPaymentTemplates
     */
    private $cancellationPaymentTemplates = null;

    public function __construct(string $details = null, string $documents = null, string $descriptions = null, string $links = null, string $priceDetails = null, string $arrivalDepartureTemplates = null, string $salesRuleTemplates = null, string $availabilities = null, string $gaps = null, string $cancellationPaymentTemplates = null)
    {
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->priceDetails = $priceDetails;
        $this->arrivalDepartureTemplates = $arrivalDepartureTemplates;
        $this->salesRuleTemplates = $salesRuleTemplates;
        $this->availabilities = $availabilities;
        $this->gaps = $gaps;
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
    }

    /**
     * Gets as details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param string $details
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as documents
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * @param string $documents
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Gets as descriptions
     *
     * @return string
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param string $descriptions
     * @return self
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Gets as links
     *
     * @return string
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * @param string $links
     * @return self
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as priceDetails
     *
     * @return string
     */
    public function getPriceDetails()
    {
        return $this->priceDetails;
    }

    /**
     * Sets a new priceDetails
     *
     * @param string $priceDetails
     * @return self
     */
    public function setPriceDetails($priceDetails)
    {
        $this->priceDetails = $priceDetails;
        return $this;
    }

    /**
     * Gets as arrivalDepartureTemplates
     *
     * @return string
     */
    public function getArrivalDepartureTemplates()
    {
        return $this->arrivalDepartureTemplates;
    }

    /**
     * Sets a new arrivalDepartureTemplates
     *
     * @param string $arrivalDepartureTemplates
     * @return self
     */
    public function setArrivalDepartureTemplates($arrivalDepartureTemplates)
    {
        $this->arrivalDepartureTemplates = $arrivalDepartureTemplates;
        return $this;
    }

    /**
     * Gets as salesRuleTemplates
     *
     * @return string
     */
    public function getSalesRuleTemplates()
    {
        return $this->salesRuleTemplates;
    }

    /**
     * Sets a new salesRuleTemplates
     *
     * @param string $salesRuleTemplates
     * @return self
     */
    public function setSalesRuleTemplates($salesRuleTemplates)
    {
        $this->salesRuleTemplates = $salesRuleTemplates;
        return $this;
    }

    /**
     * Gets as availabilities
     *
     * @return string
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Sets a new availabilities
     *
     * @param string $availabilities
     * @return self
     */
    public function setAvailabilities($availabilities)
    {
        $this->availabilities = $availabilities;
        return $this;
    }

    /**
     * Gets as gaps
     *
     * @return string
     */
    public function getGaps()
    {
        return $this->gaps;
    }

    /**
     * Sets a new gaps
     *
     * @param string $gaps
     * @return self
     */
    public function setGaps($gaps)
    {
        $this->gaps = $gaps;
        return $this;
    }

    /**
     * Gets as cancellationPaymentTemplates
     *
     * @return string
     */
    public function getCancellationPaymentTemplates()
    {
        return $this->cancellationPaymentTemplates;
    }

    /**
     * Sets a new cancellationPaymentTemplates
     *
     * @param string $cancellationPaymentTemplates
     * @return self
     */
    public function setCancellationPaymentTemplates($cancellationPaymentTemplates)
    {
        $this->cancellationPaymentTemplates = $cancellationPaymentTemplates;
        return $this;
    }
}

