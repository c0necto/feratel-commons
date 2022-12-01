<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageCategoryItemType
 *
 *
 * XSD Type: BDPackageCategoryItem
 */
class BDPackageCategoryItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $mealCode
     */
    private $mealCode = null;

    /**
     * @var float $priceFrom
     */
    private $priceFrom = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    public function __construct(string $id = null, int $order = null, string $mealCode = null, float $priceFrom = null, array $name = null)
    {
        $this->id = $id;
        $this->order = $order;
        $this->mealCode = $mealCode;
        $this->priceFrom = $priceFrom;
        $this->name = $name;
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
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as mealCode
     *
     * @return string
     */
    public function getMealCode()
    {
        return $this->mealCode;
    }

    /**
     * Sets a new mealCode
     *
     * @param string $mealCode
     * @return self
     */
    public function setMealCode($mealCode)
    {
        $this->mealCode = $mealCode;
        return $this;
    }

    /**
     * Gets as priceFrom
     *
     * @return float
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * Sets a new priceFrom
     *
     * @param float $priceFrom
     * @return self
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToName(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->name[] = $translation;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }
}

