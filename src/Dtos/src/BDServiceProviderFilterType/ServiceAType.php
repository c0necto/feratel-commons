<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{
    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType\ProductAType $product
     */
    private $product = null;

    public function __construct(string $status = null, string $id = null, string $type = null, \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType\ProductAType $product = null)
    {
        $this->status = $status;
        $this->id = $id;
        $this->type = $type;
        $this->product = $product;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as product
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType\ProductAType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType\ProductAType $product
     * @return self
     */
    public function setProduct(?\Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType\ProductAType $product = null)
    {
        $this->product = $product;
        return $this;
    }
}

