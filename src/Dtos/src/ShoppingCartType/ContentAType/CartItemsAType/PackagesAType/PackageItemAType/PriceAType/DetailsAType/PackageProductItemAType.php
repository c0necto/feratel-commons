<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType;

/**
 * Class representing PackageProductItemAType
 */
class PackageProductItemAType
{
    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var string $shoppingCartItemId
     */
    private $shoppingCartItemId = null;

    /**
     * @var \DateTime $arrival
     */
    private $arrival = null;

    /**
     * @var \DateTime $departure
     */
    private $departure = null;

    /**
     * @var float $cancIns
     */
    private $cancIns = null;

    /**
     * @var string $itemName
     */
    private $itemName = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\ParentAType $parent
     */
    private $parent = null;

    /**
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * @var string $sectionId
     */
    private $sectionId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\DurationAType $duration
     */
    private $duration = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\OccupancyAType $occupancy
     */
    private $occupancy = null;

    public function __construct(string $productId = null, string $shoppingCartItemId = null, \DateTime $arrival = null, \DateTime $departure = null, float $cancIns = null, string $itemName = null, string $type = null, int $numberOfItems = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\ParentAType $parent = null, string $categoryId = null, string $sectionId = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\DurationAType $duration = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\OccupancyAType $occupancy = null)
    {
        $this->productId = $productId;
        $this->shoppingCartItemId = $shoppingCartItemId;
        $this->arrival = $arrival;
        $this->departure = $departure;
        $this->cancIns = $cancIns;
        $this->itemName = $itemName;
        $this->type = $type;
        $this->numberOfItems = $numberOfItems;
        $this->parent = $parent;
        $this->categoryId = $categoryId;
        $this->sectionId = $sectionId;
        $this->duration = $duration;
        $this->occupancy = $occupancy;
    }

    /**
     * Gets as productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * @param string $productId
     * @return self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * Gets as shoppingCartItemId
     *
     * @return string
     */
    public function getShoppingCartItemId()
    {
        return $this->shoppingCartItemId;
    }

    /**
     * Sets a new shoppingCartItemId
     *
     * @param string $shoppingCartItemId
     * @return self
     */
    public function setShoppingCartItemId($shoppingCartItemId)
    {
        $this->shoppingCartItemId = $shoppingCartItemId;
        return $this;
    }

    /**
     * Gets as arrival
     *
     * @return \DateTime
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Sets a new arrival
     *
     * @param \DateTime $arrival
     * @return self
     */
    public function setArrival(\DateTime $arrival)
    {
        $this->arrival = $arrival;
        return $this;
    }

    /**
     * Gets as departure
     *
     * @return \DateTime
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Sets a new departure
     *
     * @param \DateTime $departure
     * @return self
     */
    public function setDeparture(\DateTime $departure)
    {
        $this->departure = $departure;
        return $this;
    }

    /**
     * Gets as cancIns
     *
     * @return float
     */
    public function getCancIns()
    {
        return $this->cancIns;
    }

    /**
     * Sets a new cancIns
     *
     * @param float $cancIns
     * @return self
     */
    public function setCancIns($cancIns)
    {
        $this->cancIns = $cancIns;
        return $this;
    }

    /**
     * Gets as itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Sets a new itemName
     *
     * @param string $itemName
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
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
     * Gets as numberOfItems
     *
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * Sets a new numberOfItems
     *
     * @param int $numberOfItems
     * @return self
     */
    public function setNumberOfItems($numberOfItems)
    {
        $this->numberOfItems = $numberOfItems;
        return $this;
    }

    /**
     * Gets as parent
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\ParentAType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\ParentAType $parent
     * @return self
     */
    public function setParent(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\ParentAType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * Gets as sectionId
     *
     * @return string
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Sets a new sectionId
     *
     * @param string $sectionId
     * @return self
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\DurationAType $duration
     * @return self
     */
    public function setDuration(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\DurationAType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\OccupancyAType
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\OccupancyAType $occupancy
     * @return self
     */
    public function setOccupancy(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType\PriceAType\DetailsAType\PackageProductItemAType\OccupancyAType $occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }
}

