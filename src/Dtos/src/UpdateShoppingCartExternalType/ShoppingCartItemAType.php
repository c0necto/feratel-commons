<?php

namespace Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType;

/**
 * Class representing ShoppingCartItemAType
 */
class ShoppingCartItemAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType[] $skidataItems
     */
    private $skidataItems = null;

    public function __construct(string $id = null, array $skidataItems = null)
    {
        $this->id = $id;
        $this->skidataItems = $skidataItems;
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
    public function setSkidataItems(array $skidataItems)
    {
        $this->skidataItems = $skidataItems;
        return $this;
    }
}

