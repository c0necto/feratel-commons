<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedAdditionalServicesType
 *
 *
 * XSD Type: BDChangedAdditionalServicesType
 */
class BDChangedAdditionalServicesType
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
     * @var mixed $ratingsAverage
     */
    private $ratingsAverage = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDChangedAdditionalProductsType $additionalProducts
     */
    private $additionalProducts = null;

    public function __construct(string $details = null, string $documents = null, string $descriptions = null, string $links = null, string $facilities = null, $ratingsAverage = null, \Conecto\FeratelDsi\Dtos\BDChangedAdditionalProductsType $additionalProducts = null)
    {
        $this->details = $details;
        $this->documents = $documents;
        $this->descriptions = $descriptions;
        $this->links = $links;
        $this->facilities = $facilities;
        $this->ratingsAverage = $ratingsAverage;
        $this->additionalProducts = $additionalProducts;
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
     * Gets as ratingsAverage
     *
     * @return mixed
     */
    public function getRatingsAverage()
    {
        return $this->ratingsAverage;
    }

    /**
     * Sets a new ratingsAverage
     *
     * @param mixed $ratingsAverage
     * @return self
     */
    public function setRatingsAverage($ratingsAverage)
    {
        $this->ratingsAverage = $ratingsAverage;
        return $this;
    }

    /**
     * Gets as additionalProducts
     *
     * @return \Conecto\FeratelDsi\Dtos\BDChangedAdditionalProductsType
     */
    public function getAdditionalProducts()
    {
        return $this->additionalProducts;
    }

    /**
     * Sets a new additionalProducts
     *
     * @param \Conecto\FeratelDsi\Dtos\BDChangedAdditionalProductsType $additionalProducts
     * @return self
     */
    public function setAdditionalProducts(?\Conecto\FeratelDsi\Dtos\BDChangedAdditionalProductsType $additionalProducts = null)
    {
        $this->additionalProducts = $additionalProducts;
        return $this;
    }
}

