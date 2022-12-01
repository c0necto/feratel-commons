<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRoomDetailsType
 *
 *
 * XSD Type: BDRoomDetailsType
 */
class BDRoomDetailsType
{
    /**
     * @var int $type
     */
    private $type = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    /**
     * @var int $maxPeople
     */
    private $maxPeople = null;

    /**
     * @var int $order
     */
    private $order = null;

    public function __construct(int $type = null, array $names = null, int $maxPeople = null, int $order = null)
    {
        $this->type = $type;
        $this->names = $names;
        $this->maxPeople = $maxPeople;
        $this->order = $order;
    }

    /**
     * Gets as type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param int $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToNames(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->names[] = $translation;
        return $this;
    }

    /**
     * isset names
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     * @return self
     */
    public function setNames(array $names)
    {
        $this->names = $names;
        return $this;
    }

    /**
     * Gets as maxPeople
     *
     * @return int
     */
    public function getMaxPeople()
    {
        return $this->maxPeople;
    }

    /**
     * Sets a new maxPeople
     *
     * @param int $maxPeople
     * @return self
     */
    public function setMaxPeople($maxPeople)
    {
        $this->maxPeople = $maxPeople;
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
}

