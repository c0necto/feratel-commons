<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDShopItemFilterType
 *
 *
 * XSD Type: BDShopItemFilter
 */
class BDShopItemFilterType
{
    /**
     * Provides shop item type information for request of basic data.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $status
     */
    private $status = null;

    public function __construct(string $type = null, string $status = null)
    {
        $this->type = $type;
        $this->status = $status;
    }

    /**
     * Gets as type
     *
     * Provides shop item type information for request of basic data.
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
     * Provides shop item type information for request of basic data.
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

