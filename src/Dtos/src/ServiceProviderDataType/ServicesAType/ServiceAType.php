<?php

namespace Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var bool $useAvailability
     */
    private $useAvailability = null;

    /**
     * @var float $rooms
     */
    private $rooms = null;

    /**
     * @var int $bedRooms
     */
    private $bedRooms = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\MatchAType $match
     */
    private $match = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType[] $products
     */
    private $products = null;

    public function __construct(string $id = null, string $name = null, bool $useAvailability = null, float $rooms = null, int $bedRooms = null, int $size = null, \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\MatchAType $match = null, array $products = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->useAvailability = $useAvailability;
        $this->rooms = $rooms;
        $this->bedRooms = $bedRooms;
        $this->size = $size;
        $this->match = $match;
        $this->products = $products;
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
     * Gets as rooms
     *
     * @return float
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Sets a new rooms
     *
     * @param float $rooms
     * @return self
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * Gets as bedRooms
     *
     * @return int
     */
    public function getBedRooms()
    {
        return $this->bedRooms;
    }

    /**
     * Sets a new bedRooms
     *
     * @param int $bedRooms
     * @return self
     */
    public function setBedRooms($bedRooms)
    {
        $this->bedRooms = $bedRooms;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as match
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\MatchAType
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Sets a new match
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\MatchAType $match
     * @return self
     */
    public function setMatch(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\MatchAType $match)
    {
        $this->match = $match;
        return $this;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType $product
     */
    public function addToProducts(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType $product)
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
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets a new products
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType\ProductsAType\ProductAType[] $products
     * @return self
     */
    public function setProducts(array $products = null)
    {
        $this->products = $products;
        return $this;
    }
}

