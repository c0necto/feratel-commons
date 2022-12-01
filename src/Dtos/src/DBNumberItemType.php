<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DBNumberItemType
 *
 *
 * XSD Type: DBNumberItem
 */
class DBNumberItemType
{
    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var string $number
     */
    private $number = null;

    public function __construct(string $dBCode = null, string $number = null)
    {
        $this->dBCode = $dBCode;
        $this->number = $number;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}

