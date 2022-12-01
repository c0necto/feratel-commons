<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SetOptionalGuaranteeCartItemType
 *
 *
 * XSD Type: SetOptionalGuaranteeCartItemType
 */
class SetOptionalGuaranteeCartItemType
{
    /**
     * @var string $shoppingCartItemId
     */
    private $shoppingCartItemId = null;

    /**
     * @var bool $optionalGuaranteeSelected
     */
    private $optionalGuaranteeSelected = null;

    public function __construct(string $shoppingCartItemId = null, bool $optionalGuaranteeSelected = null)
    {
        $this->shoppingCartItemId = $shoppingCartItemId;
        $this->optionalGuaranteeSelected = $optionalGuaranteeSelected;
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
}

