<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing LocationType
 *
 *
 * XSD Type: LocationType
 */
class LocationType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $parentID
     */
    private $parentID = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    public function __construct(string $id = null, string $parentID = null, string $name = null, \DateTime $changeDate = null, array $names = null)
    {
        $this->id = $id;
        $this->parentID = $parentID;
        $this->name = $name;
        $this->changeDate = $changeDate;
        $this->names = $names;
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
     * Gets as parentID
     *
     * @return string
     */
    public function getParentID()
    {
        return $this->parentID;
    }

    /**
     * Sets a new parentID
     *
     * @param string $parentID
     * @return self
     */
    public function setParentID($parentID)
    {
        $this->parentID = $parentID;
        return $this;
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
    public function setNames(array $names = null)
    {
        $this->names = $names;
        return $this;
    }
}

