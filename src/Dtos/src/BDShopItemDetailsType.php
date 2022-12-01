<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDShopItemDetailsType
 *
 *
 * XSD Type: BDShopItemDetailsType
 */
class BDShopItemDetailsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    /**
     * Identifes shop item type.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $owner
     */
    private $owner = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType $group
     */
    private $group = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var bool $showOnWeb
     */
    private $showOnWeb = null;

    /**
     * @var string $databaseCode
     */
    private $databaseCode = null;

    public function __construct(array $names = null, string $type = null, bool $active = null, int $order = null, string $owner = null, \Conecto\FeratelDsi\Dtos\ItemType $group = null, array $holidayThemes = null, bool $showOnWeb = null, string $databaseCode = null)
    {
        $this->names = $names;
        $this->type = $type;
        $this->active = $active;
        $this->order = $order;
        $this->owner = $owner;
        $this->group = $group;
        $this->holidayThemes = $holidayThemes;
        $this->showOnWeb = $showOnWeb;
        $this->databaseCode = $databaseCode;
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
     * Gets as type
     *
     * Identifes shop item type.
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
     * Identifes shop item type.
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
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     * Gets as owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param string $owner
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as group
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType $group
     * @return self
     */
    public function setGroup(\Conecto\FeratelDsi\Dtos\ItemType $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToHolidayThemes(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->holidayThemes[] = $item;
        return $this;
    }

    /**
     * isset holidayThemes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHolidayThemes($index)
    {
        return isset($this->holidayThemes[$index]);
    }

    /**
     * unset holidayThemes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHolidayThemes($index)
    {
        unset($this->holidayThemes[$index]);
    }

    /**
     * Gets as holidayThemes
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }

    /**
     * Gets as showOnWeb
     *
     * @return bool
     */
    public function getShowOnWeb()
    {
        return $this->showOnWeb;
    }

    /**
     * Sets a new showOnWeb
     *
     * @param bool $showOnWeb
     * @return self
     */
    public function setShowOnWeb($showOnWeb)
    {
        $this->showOnWeb = $showOnWeb;
        return $this;
    }

    /**
     * Gets as databaseCode
     *
     * @return string
     */
    public function getDatabaseCode()
    {
        return $this->databaseCode;
    }

    /**
     * Sets a new databaseCode
     *
     * @param string $databaseCode
     * @return self
     */
    public function setDatabaseCode($databaseCode)
    {
        $this->databaseCode = $databaseCode;
        return $this;
    }
}

