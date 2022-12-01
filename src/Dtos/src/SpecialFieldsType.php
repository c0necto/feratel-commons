<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SpecialFieldsType
 *
 *
 * XSD Type: SpecialFieldsType
 */
class SpecialFieldsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ImportDataOptionsType[] $specialFields
     */
    private $specialFields = null;

    public function __construct(array $specialFields = null)
    {
        $this->specialFields = $specialFields;
    }

    /**
     * Adds as specialField
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ImportDataOptionsType $specialField
     */
    public function addToSpecialFields(\Conecto\FeratelDsi\Dtos\ImportDataOptionsType $specialField)
    {
        $this->specialFields[] = $specialField;
        return $this;
    }

    /**
     * isset specialFields
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialFields($index)
    {
        return isset($this->specialFields[$index]);
    }

    /**
     * unset specialFields
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialFields($index)
    {
        unset($this->specialFields[$index]);
    }

    /**
     * Gets as specialFields
     *
     * @return \Conecto\FeratelDsi\Dtos\ImportDataOptionsType[]
     */
    public function getSpecialFields()
    {
        return $this->specialFields;
    }

    /**
     * Sets a new specialFields
     *
     * @param \Conecto\FeratelDsi\Dtos\ImportDataOptionsType[] $specialFields
     * @return self
     */
    public function setSpecialFields(array $specialFields)
    {
        $this->specialFields = $specialFields;
        return $this;
    }
}

