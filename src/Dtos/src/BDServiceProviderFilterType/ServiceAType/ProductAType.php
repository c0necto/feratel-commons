<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProviderFilterType\ServiceAType;

/**
 * Class representing ProductAType
 */
class ProductAType
{
    /**
     * @var string $productType
     */
    private $productType = null;

    /**
     * @var string $accommodationType
     */
    private $accommodationType = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $productType = null, string $accommodationType = null, string $status = null, string $id = null)
    {
        $this->productType = $productType;
        $this->accommodationType = $accommodationType;
        $this->status = $status;
        $this->id = $id;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Gets as accommodationType
     *
     * @return string
     */
    public function getAccommodationType()
    {
        return $this->accommodationType;
    }

    /**
     * Sets a new accommodationType
     *
     * @param string $accommodationType
     * @return self
     */
    public function setAccommodationType($accommodationType)
    {
        $this->accommodationType = $accommodationType;
        return $this;
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
}

