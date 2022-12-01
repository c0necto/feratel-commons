<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing UpdateShoppingCartExternalType
 *
 *
 * XSD Type: UpdateShoppingCartExternalType
 */
class UpdateShoppingCartExternalType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ShoppingCartItemAType[] $shoppingCartItem
     */
    private $shoppingCartItem = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType[] $eRVInsuredPersons
     */
    private $eRVInsuredPersons = null;

    public function __construct(string $id = null, array $shoppingCartItem = null, array $eRVInsuredPersons = null)
    {
        $this->id = $id;
        $this->shoppingCartItem = $shoppingCartItem;
        $this->eRVInsuredPersons = $eRVInsuredPersons;
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
     * Adds as shoppingCartItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ShoppingCartItemAType $shoppingCartItem
     */
    public function addToShoppingCartItem(\Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ShoppingCartItemAType $shoppingCartItem)
    {
        $this->shoppingCartItem[] = $shoppingCartItem;
        return $this;
    }

    /**
     * isset shoppingCartItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShoppingCartItem($index)
    {
        return isset($this->shoppingCartItem[$index]);
    }

    /**
     * unset shoppingCartItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShoppingCartItem($index)
    {
        unset($this->shoppingCartItem[$index]);
    }

    /**
     * Gets as shoppingCartItem
     *
     * @return \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ShoppingCartItemAType[]
     */
    public function getShoppingCartItem()
    {
        return $this->shoppingCartItem;
    }

    /**
     * Sets a new shoppingCartItem
     *
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ShoppingCartItemAType[] $shoppingCartItem
     * @return self
     */
    public function setShoppingCartItem(array $shoppingCartItem = null)
    {
        $this->shoppingCartItem = $shoppingCartItem;
        return $this;
    }

    /**
     * Adds as person
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType $person
     */
    public function addToERVInsuredPersons(\Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType $person)
    {
        $this->eRVInsuredPersons[] = $person;
        return $this;
    }

    /**
     * isset eRVInsuredPersons
     *
     * @param int|string $index
     * @return bool
     */
    public function issetERVInsuredPersons($index)
    {
        return isset($this->eRVInsuredPersons[$index]);
    }

    /**
     * unset eRVInsuredPersons
     *
     * @param int|string $index
     * @return void
     */
    public function unsetERVInsuredPersons($index)
    {
        unset($this->eRVInsuredPersons[$index]);
    }

    /**
     * Gets as eRVInsuredPersons
     *
     * @return \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType[]
     */
    public function getERVInsuredPersons()
    {
        return $this->eRVInsuredPersons;
    }

    /**
     * Sets a new eRVInsuredPersons
     *
     * @param \Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType\ERVInsuredPersonsAType\PersonAType[] $eRVInsuredPersons
     * @return self
     */
    public function setERVInsuredPersons(array $eRVInsuredPersons = null)
    {
        $this->eRVInsuredPersons = $eRVInsuredPersons;
        return $this;
    }
}

