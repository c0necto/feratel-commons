<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionsProductsType
 *
 * Defines basic data elements for package sections products requested.
 * XSD Type: BDPackageSectionsProductsType
 */
class BDPackageSectionsProductsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $availabilities
     */
    private $availabilities = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $prices
     */
    private $prices = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicElementType $availabilities = null, \Conecto\FeratelDsi\Dtos\BasicElementType $prices = null)
    {
        $this->availabilities = $availabilities;
        $this->prices = $prices;
    }

    /**
     * Gets as availabilities
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Sets a new availabilities
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $availabilities
     * @return self
     */
    public function setAvailabilities(?\Conecto\FeratelDsi\Dtos\BasicElementType $availabilities = null)
    {
        $this->availabilities = $availabilities;
        return $this;
    }

    /**
     * Gets as prices
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $prices
     * @return self
     */
    public function setPrices(?\Conecto\FeratelDsi\Dtos\BasicElementType $prices = null)
    {
        $this->prices = $prices;
        return $this;
    }
}

