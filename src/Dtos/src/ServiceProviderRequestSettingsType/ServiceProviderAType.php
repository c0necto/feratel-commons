<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType;

/**
 * Class representing ServiceProviderAType
 */
class ServiceProviderAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType\ProductAType $product
     */
    private $product = null;

    public function __construct(string $id = null, \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType\ProductAType $product = null)
    {
        $this->id = $id;
        $this->product = $product;
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
     * Gets as product
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType\ProductAType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType\ProductAType $product
     * @return self
     */
    public function setProduct(?\Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType\ServiceProviderAType\ProductAType $product = null)
    {
        $this->product = $product;
        return $this;
    }
}

