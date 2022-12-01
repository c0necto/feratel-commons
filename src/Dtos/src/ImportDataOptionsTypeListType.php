<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ImportDataOptionsTypeListType
 *
 *
 * XSD Type: ImportDataOptionsTypeList
 */
class ImportDataOptionsTypeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ImportDataOptionsType[] $specialField
     */
    private $specialField = [
        
    ];

    public function __construct(array $specialField = null)
    {
        $this->specialField = $specialField;
    }

    /**
     * Adds as specialField
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ImportDataOptionsType $specialField
     */
    public function addToSpecialField(\Conecto\FeratelDsi\Dtos\ImportDataOptionsType $specialField)
    {
        $this->specialField[] = $specialField;
        return $this;
    }

    /**
     * isset specialField
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialField($index)
    {
        return isset($this->specialField[$index]);
    }

    /**
     * unset specialField
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialField($index)
    {
        unset($this->specialField[$index]);
    }

    /**
     * Gets as specialField
     *
     * @return \Conecto\FeratelDsi\Dtos\ImportDataOptionsType[]
     */
    public function getSpecialField()
    {
        return $this->specialField;
    }

    /**
     * Sets a new specialField
     *
     * @param \Conecto\FeratelDsi\Dtos\ImportDataOptionsType[] $specialField
     * @return self
     */
    public function setSpecialField(array $specialField = null)
    {
        $this->specialField = $specialField;
        return $this;
    }
}

