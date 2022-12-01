<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXAddressContactCodeItemType
 *
 *
 * XSD Type: ONAXAddressContactCodeItem
 */
class ONAXAddressContactCodeItemType
{
    /**
     * @var string $accContactID
     */
    private $accContactID = null;

    /**
     * @var string $accCode
     */
    private $accCode = null;

    /**
     * @var string $accValue
     */
    private $accValue = null;

    public function __construct(string $accContactID = null, string $accCode = null, string $accValue = null)
    {
        $this->accContactID = $accContactID;
        $this->accCode = $accCode;
        $this->accValue = $accValue;
    }

    /**
     * Gets as accContactID
     *
     * @return string
     */
    public function getAccContactID()
    {
        return $this->accContactID;
    }

    /**
     * Sets a new accContactID
     *
     * @param string $accContactID
     * @return self
     */
    public function setAccContactID($accContactID)
    {
        $this->accContactID = $accContactID;
        return $this;
    }

    /**
     * Gets as accCode
     *
     * @return string
     */
    public function getAccCode()
    {
        return $this->accCode;
    }

    /**
     * Sets a new accCode
     *
     * @param string $accCode
     * @return self
     */
    public function setAccCode($accCode)
    {
        $this->accCode = $accCode;
        return $this;
    }

    /**
     * Gets as accValue
     *
     * @return string
     */
    public function getAccValue()
    {
        return $this->accValue;
    }

    /**
     * Sets a new accValue
     *
     * @param string $accValue
     * @return self
     */
    public function setAccValue($accValue)
    {
        $this->accValue = $accValue;
        return $this;
    }
}

