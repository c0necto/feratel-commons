<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType;

/**
 * Class representing AdditionalServicesAType
 */
class AdditionalServicesAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType[] $additionalServiceItem
     */
    private $additionalServiceItem = [
        
    ];

    public function __construct(array $additionalServiceItem = null)
    {
        $this->additionalServiceItem = $additionalServiceItem;
    }

    /**
     * Adds as additionalServiceItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType $additionalServiceItem
     */
    public function addToAdditionalServiceItem(\Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType $additionalServiceItem)
    {
        $this->additionalServiceItem[] = $additionalServiceItem;
        return $this;
    }

    /**
     * isset additionalServiceItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalServiceItem($index)
    {
        return isset($this->additionalServiceItem[$index]);
    }

    /**
     * unset additionalServiceItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalServiceItem($index)
    {
        unset($this->additionalServiceItem[$index]);
    }

    /**
     * Gets as additionalServiceItem
     *
     * @return \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType[]
     */
    public function getAdditionalServiceItem()
    {
        return $this->additionalServiceItem;
    }

    /**
     * Sets a new additionalServiceItem
     *
     * @param \Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\AdditionalServicesAType\AdditionalServiceItemAType[] $additionalServiceItem
     * @return self
     */
    public function setAdditionalServiceItem(array $additionalServiceItem = null)
    {
        $this->additionalServiceItem = $additionalServiceItem;
        return $this;
    }
}

