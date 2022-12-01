<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedServicesType
 *
 *
 * XSD Type: BDChangedServicesType
 */
class BDChangedServicesType
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
     * @var string $facilities
     */
    private $facilities = null;

    /**
     * @var string $availabilities
     */
    private $availabilities = null;

    /**
     * @var string $handicapFacilities
     */
    private $handicapFacilities = null;

    /**
     * @var string $handicapClassifications
     */
    private $handicapClassifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedProductsType $products
     */
    private $products = null;

    public function __construct(string $details = null, string $documents = null, string $descriptions = null, string $links = null, string $facilities = null, string $availabilities = null, string $handicapFacilities = null, string $handicapClassifications = null, \Conecto\FeratelDsi\Dtos\BDChangedProductsType $products = null)
    {
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->facilities = $facilities;
        $this->availabilities = $availabilities;
        $this->handicapFacilities = $handicapFacilities;
        $this->handicapClassifications = $handicapClassifications;
        $this->products = $products;
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
     * Gets as facilities
     *
     * @return string
     */
    public function getFacilities()
    {
        return $this->facilities;
    }

    /**
     * Sets a new facilities
     *
     * @param string $facilities
     * @return self
     */
    public function setFacilities($facilities)
    {
        $this->facilities = $facilities;
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
     * Gets as handicapFacilities
     *
     * @return string
     */
    public function getHandicapFacilities()
    {
        return $this->handicapFacilities;
    }

    /**
     * Sets a new handicapFacilities
     *
     * @param string $handicapFacilities
     * @return self
     */
    public function setHandicapFacilities($handicapFacilities)
    {
        $this->handicapFacilities = $handicapFacilities;
        return $this;
    }

    /**
     * Gets as handicapClassifications
     *
     * @return string
     */
    public function getHandicapClassifications()
    {
        return $this->handicapClassifications;
    }

    /**
     * Sets a new handicapClassifications
     *
     * @param string $handicapClassifications
     * @return self
     */
    public function setHandicapClassifications($handicapClassifications)
    {
        $this->handicapClassifications = $handicapClassifications;
        return $this;
    }

    /**
     * Gets as products
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedProductsType
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedProductsType $products
     * @return self
     */
    public function setProducts(?\Conecto\FeratelDsi\Dtos\BDChangedProductsType $products = null)
    {
        $this->products = $products;
        return $this;
    }
}

