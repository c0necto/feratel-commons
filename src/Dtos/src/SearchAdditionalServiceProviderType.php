<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchAdditionalServiceProviderType
 *
 *
 * XSD Type: SearchAdditionalServiceProviderType
 */
class SearchAdditionalServiceProviderType
{
    /**
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
     *
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
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $facility
     */
    private $facility = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceType $service
     */
    private $service = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchProductType $product
     */
    private $product = null;

    public function __construct(string $id = null, string $code = null, string $name = null, array $facility = null, \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceType $service = null, \Conecto\FeratelDsi\Dtos\SearchProductType $product = null)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->facility = $facility;
        $this->service = $service;
        $this->product = $product;
    }

    /**
     * Gets as id
     *
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
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
     * Used to identify object within the system. The value is identified as valid GUID {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
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
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToFacility(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->facility[] = $item;
        return $this;
    }

    /**
     * isset facility
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFacility($index)
    {
        return isset($this->facility[$index]);
    }

    /**
     * unset facility
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFacility($index)
    {
        unset($this->facility[$index]);
    }

    /**
     * Gets as facility
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $facility
     * @return self
     */
    public function setFacility(array $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceType $service
     * @return self
     */
    public function setService(?\Conecto\FeratelDsi\Dtos\SearchAdditionalServiceType $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as product
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchProductType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchProductType $product
     * @return self
     */
    public function setProduct(?\Conecto\FeratelDsi\Dtos\SearchProductType $product = null)
    {
        $this->product = $product;
        return $this;
    }
}

