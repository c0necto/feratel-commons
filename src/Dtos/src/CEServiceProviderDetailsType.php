<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CEServiceProviderDetailsType
 *
 *
 * XSD Type: CEServiceProviderDetailsType
 */
class CEServiceProviderDetailsType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $town
     */
    private $town = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     */
    private $categories = null;

    /**
     * @var bool $active
     */
    private $active = null;

    public function __construct(string $name = null, string $town = null, string $code = null, string $type = null, \Conecto\FeratelDsi\Dtos\ItemType $stars = null, array $categories = null, bool $active = null)
    {
        $this->name = $name;
        $this->town = $town;
        $this->code = $code;
        $this->type = $type;
        $this->stars = $stars;
        $this->categories = $categories;
        $this->active = $active;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Sets a new town
     *
     * @param string $town
     * @return self
     */
    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
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
     * Gets as stars
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Sets a new stars
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType $stars
     * @return self
     */
    public function setStars(?\Conecto\FeratelDsi\Dtos\ItemType $stars = null)
    {
        $this->stars = $stars;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToCategories(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->categories[] = $item;
        return $this;
    }

    /**
     * isset categories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategories($index)
    {
        return isset($this->categories[$index]);
    }

    /**
     * unset categories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategories($index)
    {
        unset($this->categories[$index]);
    }

    /**
     * Gets as categories
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     * @return self
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;
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
}

