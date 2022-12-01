<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType;

/**
 * Class representing AdditionalServiceItemAType
 */
class AdditionalServiceItemAType
{
    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var string $payType
     */
    private $payType = null;

    /**
     * @var \DateTime $arrival
     */
    private $arrival = null;

    /**
     * @var float $cancIns
     */
    private $cancIns = null;

    /**
     * @var string $shoppingCartItemId
     */
    private $shoppingCartItemId = null;

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
     * @var string $externalSystemType
     */
    private $externalSystemType = null;

    /**
     * @var int $numberOfItems
     */
    private $numberOfItems = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\ParentAType $parent
     */
    private $parent = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\DurationAType $duration
     */
    private $duration = null;

    /**
     * @var string $startTime
     */
    private $startTime = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\PriceAType $price
     */
    private $price = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType[] $skidataItems
     */
    private $skidataItems = null;

    public function __construct(string $productId = null, string $payType = null, \DateTime $arrival = null, float $cancIns = null, string $shoppingCartItemId = null, string $itemName = null, string $type = null, bool $optionalGuaranteeSelected = null, string $externalSystemType = null, int $numberOfItems = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\ParentAType $parent = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\DurationAType $duration = null, string $startTime = null, \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\PriceAType $price = null, array $skidataItems = null)
    {
        $this->productId = $productId;
        $this->payType = $payType;
        $this->arrival = $arrival;
        $this->cancIns = $cancIns;
        $this->shoppingCartItemId = $shoppingCartItemId;
        $this->itemName = $itemName;
        $this->type = $type;
        $this->optionalGuaranteeSelected = $optionalGuaranteeSelected;
        $this->externalSystemType = $externalSystemType;
        $this->numberOfItems = $numberOfItems;
        $this->parent = $parent;
        $this->duration = $duration;
        $this->startTime = $startTime;
        $this->price = $price;
        $this->skidataItems = $skidataItems;
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
     * Gets as externalSystemType
     *
     * @return string
     */
    public function getExternalSystemType()
    {
        return $this->externalSystemType;
    }

    /**
     * Sets a new externalSystemType
     *
     * @param string $externalSystemType
     * @return self
     */
    public function setExternalSystemType($externalSystemType)
    {
        $this->externalSystemType = $externalSystemType;
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
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\ParentAType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\ParentAType $parent
     * @return self
     */
    public function setParent(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\ParentAType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as duration
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\DurationAType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\DurationAType $duration
     * @return self
     */
    public function setDuration(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\DurationAType $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * @param string $startTime
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\PriceAType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\PriceAType $price
     * @return self
     */
    public function setPrice(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType\PriceAType $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Adds as skidataItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType $skidataItem
     */
    public function addToSkidataItems(\Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType $skidataItem)
    {
        $this->skidataItems[] = $skidataItem;
        return $this;
    }

    /**
     * isset skidataItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSkidataItems($index)
    {
        return isset($this->skidataItems[$index]);
    }

    /**
     * unset skidataItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSkidataItems($index)
    {
        unset($this->skidataItems[$index]);
    }

    /**
     * Gets as skidataItems
     *
     * @return \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType[]
     */
    public function getSkidataItems()
    {
        return $this->skidataItems;
    }

    /**
     * Sets a new skidataItems
     *
     * @param \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType[] $skidataItems
     * @return self
     */
    public function setSkidataItems(array $skidataItems = null)
    {
        $this->skidataItems = $skidataItems;
        return $this;
    }
}

