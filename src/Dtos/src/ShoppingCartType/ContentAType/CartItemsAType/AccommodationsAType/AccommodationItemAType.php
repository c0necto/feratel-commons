<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType;

/**
 * Class representing AccommodationItemAType
 */
class AccommodationItemAType
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
     * @var string $payType
     */
    private $payType = null;

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
     * @var bool $optionalGuaranteeSelected
     */
    private $optionalGuaranteeSelected = null;

    /**
     * @var float $commission
     */
    private $commission = null;

    /**
     * @var float $commissionToSalesPoint
     */
    private $commissionToSalesPoint = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\ParentAType $parent
     */
    private $parent = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\DurationAType $duration
     */
    private $duration = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\OccupancyAType $occupancy
     */
    private $occupancy = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType $price
     */
    private $price = null;

    public function __construct(string $productId = null, string $shoppingCartItemId = null, string $payType = null, \DateTime $arrival = null, \DateTime $departure = null, float $cancIns = null, string $itemName = null, string $type = null, bool $optionalGuaranteeSelected = null, float $commission = null, float $commissionToSalesPoint = null, int $numberOfItems = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\ParentAType $parent = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\DurationAType $duration = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\OccupancyAType $occupancy = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType $price = null)
    {
        $this->productId = $productId;
        $this->shoppingCartItemId = $shoppingCartItemId;
        $this->payType = $payType;
        $this->arrival = $arrival;
        $this->departure = $departure;
        $this->cancIns = $cancIns;
        $this->itemName = $itemName;
        $this->type = $type;
        $this->optionalGuaranteeSelected = $optionalGuaranteeSelected;
        $this->commission = $commission;
        $this->commissionToSalesPoint = $commissionToSalesPoint;
        $this->numberOfItems = $numberOfItems;
        $this->parent = $parent;
        $this->duration = $duration;
        $this->occupancy = $occupancy;
        $this->price = $price;
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
     * Gets as payType
     *
     * @return string
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * Sets a new payType
     *
     * @param string $payType
     * @return self
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
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
     * Gets as optionalGuaranteeSelected
     *
     * @return bool
     */
    public function getOptionalGuaranteeSelected()
    {
        return $this->optionalGuaranteeSelected;
    }

    /**
     * Sets a new optionalGuaranteeSelected
     *
     * @param bool $optionalGuaranteeSelected
     * @return self
     */
    public function setOptionalGuaranteeSelected($optionalGuaranteeSelected)
    {
        $this->optionalGuaranteeSelected = $optionalGuaranteeSelected;
        return $this;
    }

    /**
     * Gets as commission
     *
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * @param float $commission
     * @return self
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * Gets as commissionToSalesPoint
     *
     * @return float
     */
    public function getCommissionToSalesPoint()
    {
        return $this->commissionToSalesPoint;
    }

    /**
     * Sets a new commissionToSalesPoint
     *
     * @param float $commissionToSalesPoint
     * @return self
     */
    public function setCommissionToSalesPoint($commissionToSalesPoint)
    {
        $this->commissionToSalesPoint = $commissionToSalesPoint;
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
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\ParentAType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\ParentAType $parent
     * @return self
     */
    public function setParent(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\ParentAType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\DurationAType $duration
     * @return self
     */
    public function setDuration(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\DurationAType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as occupancy
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\OccupancyAType
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\OccupancyAType $occupancy
     * @return self
     */
    public function setOccupancy(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\OccupancyAType $occupancy)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType $price
     * @return self
     */
    public function setPrice(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AccommodationsAType\AccommodationItemAType\PriceAType $price)
    {
        $this->price = $price;
        return $this;
    }
}

