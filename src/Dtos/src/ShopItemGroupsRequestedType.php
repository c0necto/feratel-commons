<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ShopItemGroupsRequestedType
 *
 *
 * XSD Type: ShopItemGroupsRequestedType
 */
class ShopItemGroupsRequestedType extends RequestedType
{
    /**
     * @var string $type
     */
    private $type = null;

    public function __construct(string $type = null, bool $show = null, string $id = null)
    {
        $this->type = $type;
        parent::__construct($show,$id);
    }

    /**
     * Gets as type
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
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

