<?php

namespace Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{
    /**
     * @var string $mappingCode
     */
    private $mappingCode = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var bool $useAvailability
     */
    private $useAvailability = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType\ProductAType[] $product
     */
    private $product = [
        
    ];

    public function __construct(string $mappingCode = null, string $name = null, string $type = null, bool $active = null, bool $useAvailability = null, array $product = null)
    {
        $this->mappingCode = $mappingCode;
        $this->name = $name;
        $this->type = $type;
        $this->active = $active;
        $this->useAvailability = $useAvailability;
        $this->product = $product;
    }

    /**
     * Gets as mappingCode
     *
     * @return string
     */
    public function getMappingCode()
    {
        return $this->mappingCode;
    }

    /**
     * Sets a new mappingCode
     *
     * @param string $mappingCode
     * @return self
     */
    public function setMappingCode($mappingCode)
    {
        $this->mappingCode = $mappingCode;
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
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as useAvailability
     *
     * @return bool
     */
    public function getUseAvailability()
    {
        return $this->useAvailability;
    }

    /**
     * Sets a new useAvailability
     *
     * @param bool $useAvailability
     * @return self
     */
    public function setUseAvailability($useAvailability)
    {
        $this->useAvailability = $useAvailability;
        return $this;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType\ProductAType $product
     */
    public function addToProduct(\Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType\ProductAType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * @return \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType\ProductAType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType\ServiceAType\ProductAType[] $product
     * @return self
     */
    public function setProduct(array $product = null)
    {
        $this->product = $product;
        return $this;
    }
}

