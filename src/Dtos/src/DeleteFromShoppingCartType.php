<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DeleteFromShoppingCartType
 *
 *
 * XSD Type: DeleteFromShoppingCartType
 */
class DeleteFromShoppingCartType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $dbCode
     */
    private $dbCode = null;

    /**
     * @var string $salesChannelId
     */
    private $salesChannelId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DeleteCartItemType $cartItem
     */
    private $cartItem = null;

    public function __construct(string $id = null, string $dbCode = null, string $salesChannelId = null, \Conecto\FeratelDsi\Dtos\DeleteCartItemType $cartItem = null)
    {
        $this->id = $id;
        $this->dbCode = $dbCode;
        $this->salesChannelId = $salesChannelId;
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
     * Gets as dbCode
     *
     * @return string
     */
    public function getDbCode()
    {
        return $this->dbCode;
    }

    /**
     * Sets a new dbCode
     *
     * @param string $dbCode
     * @return self
     */
    public function setDbCode($dbCode)
    {
        $this->dbCode = $dbCode;
        return $this;
    }

    /**
     * Gets as salesChannelId
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->salesChannelId;
    }

    /**
     * Sets a new salesChannelId
     *
     * @param string $salesChannelId
     * @return self
     */
    public function setSalesChannelId($salesChannelId)
    {
        $this->salesChannelId = $salesChannelId;
        return $this;
    }

    /**
     * Gets as cartItem
     *
     * @return \Conecto\FeratelDsi\Dtos\DeleteCartItemType
     */
    public function getCartItem()
    {
        return $this->cartItem;
    }

    /**
     * Sets a new cartItem
     *
     * @param \Conecto\FeratelDsi\Dtos\DeleteCartItemType $cartItem
     * @return self
     */
    public function setCartItem(?\Conecto\FeratelDsi\Dtos\DeleteCartItemType $cartItem = null)
    {
        $this->cartItem = $cartItem;
        return $this;
    }
}

