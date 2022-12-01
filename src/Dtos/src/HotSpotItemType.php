<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HotSpotItemType
 *
 *
 * XSD Type: HotSpotItem
 */
class HotSpotItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $order
     */
    private $order = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var string $typeId
     */
    private $typeId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\HotSpotItemType\PositionAType $position
     */
    private $position = null;

    public function __construct(string $id = null, string $order = null, \DateTime $changeDate = null, string $typeId = null, array $name = null, \Conecto\FeratelDsi\Dtos\HotSpotItemType\PositionAType $position = null)
    {
        $this->id = $id;
        $this->order = $order;
        $this->changeDate = $changeDate;
        $this->typeId = $typeId;
        $this->name = $name;
        $this->position = $position;
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
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param string $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
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
     * Gets as typeId
     *
     * @return string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Sets a new typeId
     *
     * @param string $typeId
     * @return self
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
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

    /**
     * Gets as position
     *
     * @return \Conecto\FeratelDsi\Dtos\HotSpotItemType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\HotSpotItemType\PositionAType $position
     * @return self
     */
    public function setPosition(\Conecto\FeratelDsi\Dtos\HotSpotItemType\PositionAType $position)
    {
        $this->position = $position;
        return $this;
    }
}

