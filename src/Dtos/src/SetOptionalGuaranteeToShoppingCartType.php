<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SetOptionalGuaranteeToShoppingCartType
 *
 *
 * XSD Type: SetOptionalGuaranteeToShoppingCartType
 */
class SetOptionalGuaranteeToShoppingCartType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeCartItemType $cartItem
     */
    private $cartItem = null;

    public function __construct(string $id = null, \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeCartItemType $cartItem = null)
    {
        $this->id = $id;
        $this->cartItem = $cartItem;
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
     * Gets as cartItem
     *
     * @return \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeCartItemType
     */
    public function getCartItem()
    {
        return $this->cartItem;
    }

    /**
     * Sets a new cartItem
     *
     * @param \Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeCartItemType $cartItem
     * @return self
     */
    public function setCartItem(?\Conecto\FeratelDsi\Dtos\SetOptionalGuaranteeCartItemType $cartItem = null)
    {
        $this->cartItem = $cartItem;
        return $this;
    }
}

