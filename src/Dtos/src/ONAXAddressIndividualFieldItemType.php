<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXAddressIndividualFieldItemType
 *
 *
 * XSD Type: ONAXAddressIndividualFieldItem
 */
class ONAXAddressIndividualFieldItemType
{
    /**
     * @var string $aifAddressID
     */
    private $aifAddressID = null;

    /**
     * @var string $aifName
     */
    private $aifName = null;

    /**
     * @var string $aifValue
     */
    private $aifValue = null;

    public function __construct(string $aifAddressID = null, string $aifName = null, string $aifValue = null)
    {
        $this->aifAddressID = $aifAddressID;
        $this->aifName = $aifName;
        $this->aifValue = $aifValue;
    }

    /**
     * Gets as aifAddressID
     *
     * @return string
     */
    public function getAifAddressID()
    {
        return $this->aifAddressID;
    }

    /**
     * Sets a new aifAddressID
     *
     * @param string $aifAddressID
     * @return self
     */
    public function setAifAddressID($aifAddressID)
    {
        $this->aifAddressID = $aifAddressID;
        return $this;
    }

    /**
     * Gets as aifName
     *
     * @return string
     */
    public function getAifName()
    {
        return $this->aifName;
    }

    /**
     * Sets a new aifName
     *
     * @param string $aifName
     * @return self
     */
    public function setAifName($aifName)
    {
        $this->aifName = $aifName;
        return $this;
    }

    /**
     * Gets as aifValue
     *
     * @return string
     */
    public function getAifValue()
    {
        return $this->aifValue;
    }

    /**
     * Sets a new aifValue
     *
     * @param string $aifValue
     * @return self
     */
    public function setAifValue($aifValue)
    {
        $this->aifValue = $aifValue;
        return $this;
    }
}

