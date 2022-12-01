<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionSelectionRulestypesType
 *
 *
 * XSD Type: BDPackageSectionSelectionRulestypes
 */
class BDPackageSectionSelectionRulestypesType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var bool $addPrice
     */
    private $addPrice = null;

    /**
     * @var bool $showPrice
     */
    private $showPrice = null;

    public function __construct(string $type = null, bool $addPrice = null, bool $showPrice = null)
    {
        $this->type = $type;
        $this->addPrice = $addPrice;
        $this->showPrice = $showPrice;
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

    /**
     * Gets as addPrice
     *
     * @return bool
     */
    public function getAddPrice()
    {
        return $this->addPrice;
    }

    /**
     * Sets a new addPrice
     *
     * @param bool $addPrice
     * @return self
     */
    public function setAddPrice($addPrice)
    {
        $this->addPrice = $addPrice;
        return $this;
    }

    /**
     * Gets as showPrice
     *
     * @return bool
     */
    public function getShowPrice()
    {
        return $this->showPrice;
    }

    /**
     * Sets a new showPrice
     *
     * @param bool $showPrice
     * @return self
     */
    public function setShowPrice($showPrice)
    {
        $this->showPrice = $showPrice;
        return $this;
    }
}

