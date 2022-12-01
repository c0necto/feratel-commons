<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionsType
 *
 * Defines basic data elements for package sections requested.
 * XSD Type: BDPackageSectionsType
 */
class BDPackageSectionsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $details
     */
    private $details = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions
     */
    private $descriptions = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BasicElementType $prices
     */
    private $prices = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionsProductsType $products
     */
    private $products = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\BasicElementType $details = null, \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null, \Conecto\FeratelDsi\Dtos\BasicElementType $prices = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionsProductsType $products = null)
    {
        $this->details = $details;
        $this->descriptions = $descriptions;
        $this->prices = $prices;
        $this->products = $products;
    }

    /**
     * Gets as details
     *
     * @return \Conecto\FeratelDsi\Dtos\BasicElementType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * @param \Conecto\FeratelDsi\Dtos\BasicElementType $details
     * @return self
     */
    public function setDetails(?\Conecto\FeratelDsi\Dtos\BasicElementType $details = null)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions
     * @return self
     */
    public function setDescriptions(?\Conecto\FeratelDsi\Dtos\BDDescriptionsFilterType $descriptions = null)
    {
        $this->descriptions = $descriptions;
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

    /**
     * Gets as products
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionsProductsType
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionsProductsType $products
     * @return self
     */
    public function setProducts(?\Conecto\FeratelDsi\Dtos\BDPackageSectionsProductsType $products = null)
    {
        $this->products = $products;
        return $this;
    }
}

