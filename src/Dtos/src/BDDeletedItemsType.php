<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDDeletedItemsType
 *
 *
 * XSD Type: BDDeletedItemsType
 */
class BDDeletedItemsType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTimeFrom
     */
    private $dateTimeFrom = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDDeletedItemType[] $deletedItem
     */
    private $deletedItem = [
        
    ];

    public function __construct(\DateTime $dateFrom = null, \DateTime $dateTimeFrom = null, array $deletedItem = null)
    {
        $this->dateFrom = $dateFrom;
        $this->dateTimeFrom = $dateTimeFrom;
        $this->deletedItem = $deletedItem;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTimeFrom
     *
     * @return \DateTime
     */
    public function getDateTimeFrom()
    {
        return $this->dateTimeFrom;
    }

    /**
     * Sets a new dateTimeFrom
     *
     * @param \DateTime $dateTimeFrom
     * @return self
     */
    public function setDateTimeFrom(\DateTime $dateTimeFrom)
    {
        $this->dateTimeFrom = $dateTimeFrom;
        return $this;
    }

    /**
     * Adds as deletedItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDDeletedItemType $deletedItem
     */
    public function addToDeletedItem(\Conecto\FeratelDsi\Dtos\BDDeletedItemType $deletedItem)
    {
        $this->deletedItem[] = $deletedItem;
        return $this;
    }

    /**
     * isset deletedItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedItem($index)
    {
        return isset($this->deletedItem[$index]);
    }

    /**
     * unset deletedItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedItem($index)
    {
        unset($this->deletedItem[$index]);
    }

    /**
     * Gets as deletedItem
     *
     * @return \Conecto\FeratelDsi\Dtos\BDDeletedItemType[]
     */
    public function getDeletedItem()
    {
        return $this->deletedItem;
    }

    /**
     * Sets a new deletedItem
     *
     * @param \Conecto\FeratelDsi\Dtos\BDDeletedItemType[] $deletedItem
     * @return self
     */
    public function setDeletedItem(array $deletedItem)
    {
        $this->deletedItem = $deletedItem;
        return $this;
    }
}

