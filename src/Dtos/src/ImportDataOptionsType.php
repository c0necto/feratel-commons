<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ImportDataOptionsType
 *
 *
 * XSD Type: ImportDataOptionsType
 */
class ImportDataOptionsType
{
    /**
     * @var string $xMLName
     */
    private $xMLName = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $databaseValue
     */
    private $databaseValue = null;

    public function __construct(string $xMLName = null, string $type = null, string $databaseValue = null)
    {
        $this->xMLName = $xMLName;
        $this->type = $type;
        $this->databaseValue = $databaseValue;
    }

    /**
     * Gets as xMLName
     *
     * @return string
     */
    public function getXMLName()
    {
        return $this->xMLName;
    }

    /**
     * Sets a new xMLName
     *
     * @param string $xMLName
     * @return self
     */
    public function setXMLName($xMLName)
    {
        $this->xMLName = $xMLName;
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
     * Gets as databaseValue
     *
     * @return string
     */
    public function getDatabaseValue()
    {
        return $this->databaseValue;
    }

    /**
     * Sets a new databaseValue
     *
     * @param string $databaseValue
     * @return self
     */
    public function setDatabaseValue($databaseValue)
    {
        $this->databaseValue = $databaseValue;
        return $this;
    }
}

