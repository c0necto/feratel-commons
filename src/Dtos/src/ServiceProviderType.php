<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ServiceProviderType
 *
 *
 * XSD Type: ServiceProviderType
 */
class ServiceProviderType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $townName
     */
    private $townName = null;

    /**
     * @var string $districtName
     */
    private $districtName = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RatingType $rating
     */
    private $rating = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ProductType[] $products
     */
    private $products = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\AdditionalServicesType $additionalServices
     */
    private $additionalServices = null;

    /**
     * @var string $databaseCode
     */
    private $databaseCode = null;

    public function __construct(string $id = null, string $code = null, string $name = null, string $townName = null, string $districtName = null, \Conecto\FeratelDsi\Dtos\RatingType $rating = null, array $products = null, \Conecto\FeratelDsi\Dtos\AdditionalServicesType $additionalServices = null, string $databaseCode = null)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->townName = $townName;
        $this->districtName = $districtName;
        $this->rating = $rating;
        $this->products = $products;
        $this->additionalServices = $additionalServices;
        $this->databaseCode = $databaseCode;
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
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * Gets as townName
     *
     * @return string
     */
    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * Sets a new townName
     *
     * @param string $townName
     * @return self
     */
    public function setTownName($townName)
    {
        $this->townName = $townName;
        return $this;
    }

    /**
     * Gets as districtName
     *
     * @return string
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * Sets a new districtName
     *
     * @param string $districtName
     * @return self
     */
    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;
        return $this;
    }

    /**
     * Gets as rating
     *
     * @return \Conecto\FeratelDsi\Dtos\RatingType
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * @param \Conecto\FeratelDsi\Dtos\RatingType $rating
     * @return self
     */
    public function setRating(?\Conecto\FeratelDsi\Dtos\RatingType $rating = null)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ProductType $product
     */
    public function addToProducts(\Conecto\FeratelDsi\Dtos\ProductType $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * isset products
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProducts($index)
    {
        return isset($this->products[$index]);
    }

    /**
     * unset products
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProducts($index)
    {
        unset($this->products[$index]);
    }

    /**
     * Gets as products
     *
     * @return \Conecto\FeratelDsi\Dtos\ProductType[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\ProductType[] $products
     * @return self
     */
    public function setProducts(array $products = null)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * Gets as additionalServices
     *
     * @return \Conecto\FeratelDsi\Dtos\AdditionalServicesType
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Sets a new additionalServices
     *
     * @param \Conecto\FeratelDsi\Dtos\AdditionalServicesType $additionalServices
     * @return self
     */
    public function setAdditionalServices(?\Conecto\FeratelDsi\Dtos\AdditionalServicesType $additionalServices = null)
    {
        $this->additionalServices = $additionalServices;
        return $this;
    }

    /**
     * Gets as databaseCode
     *
     * @return string
     */
    public function getDatabaseCode()
    {
        return $this->databaseCode;
    }

    /**
     * Sets a new databaseCode
     *
     * @param string $databaseCode
     * @return self
     */
    public function setDatabaseCode($databaseCode)
    {
        $this->databaseCode = $databaseCode;
        return $this;
    }
}

