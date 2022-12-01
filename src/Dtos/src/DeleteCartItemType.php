<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DeleteCartItemType
 *
 *
 * XSD Type: DeleteCartItemType
 */
class DeleteCartItemType
{
    /**
     * @var string $shoppingCartItemId
     */
    private $shoppingCartItemId = null;

    public function __construct(string $shoppingCartItemId = null)
    {
        $this->shoppingCartItemId = $shoppingCartItemId;
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
}

