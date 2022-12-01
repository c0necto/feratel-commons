<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing StringListType
 *
 *
 * XSD Type: StringList
 */
class StringListType
{
    /**
     * @var string[] $item
     */
    private $item = [
        
    ];

    public function __construct(array $item = null)
    {
        $this->item = $item;
    }

    /**
     * Adds as item
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
     * @return string[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param string[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }
}

