<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing GuidListType
 *
 * Defines list of specific items.
 * XSD Type: GuidList
 */
class GuidListType
{
    /**
     * Defines list's single item.
     *
     * @var string[] $item
     */
    private $item = null;

    public function __construct(array $item = null)
    {
        $this->item = $item;
    }

    /**
     * Adds as item
     *
     * Defines list's single item.
     *
     * @return self
     * @param string $item
     */
    public function addToItem($item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Defines list's single item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Defines list's single item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Defines list's single item.
     *
     * @return string[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Defines list's single item.
     *
     * @param string $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}

