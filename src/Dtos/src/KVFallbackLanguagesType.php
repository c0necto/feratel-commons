<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KVFallbackLanguagesType
 *
 *
 * XSD Type: KVFallbackLanguagesType
 */
class KVFallbackLanguagesType
{
    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var bool $default
     */
    private $default = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $fallback
     */
    private $fallback = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    public function __construct(bool $active = null, string $code = null, \DateTime $changeDate = null, bool $default = null, int $order = null, string $fallback = null, array $name = null)
    {
        $this->active = $active;
        $this->code = $code;
        $this->changeDate = $changeDate;
        $this->default = $default;
        $this->order = $order;
        $this->fallback = $fallback;
        $this->name = $name;
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
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Gets as default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
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
     * Gets as fallback
     *
     * @return string
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * Sets a new fallback
     *
     * @param string $fallback
     * @return self
     */
    public function setFallback($fallback)
    {
        $this->fallback = $fallback;
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

