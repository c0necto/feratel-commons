<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDChangedAdditionalProductsType
 *
 *
 * XSD Type: BDChangedAdditionalProductsType
 */
class BDChangedAdditionalProductsType
{
    /**
     * @var string $details
     */
    private $details = null;

    /**
     * @var string $priceDetails
     */
    private $priceDetails = null;

    public function __construct(string $details = null, string $priceDetails = null)
    {
        $this->details = $details;
        $this->priceDetails = $priceDetails;
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
}

