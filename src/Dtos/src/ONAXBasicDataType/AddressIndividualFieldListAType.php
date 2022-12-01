<?php

namespace Conecto\FeratelDsi\Dtos\ONAXBasicDataType;

/**
 * Class representing AddressIndividualFieldListAType
 */
class AddressIndividualFieldListAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType[] $addressIndividualField
     */
    private $addressIndividualField = [
        
    ];

    public function __construct(array $addressIndividualField = null)
    {
        $this->addressIndividualField = $addressIndividualField;
    }

    /**
     * Adds as addressIndividualField
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType $addressIndividualField
     */
    public function addToAddressIndividualField(\Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType $addressIndividualField)
    {
        $this->addressIndividualField[] = $addressIndividualField;
        return $this;
    }

    /**
     * isset addressIndividualField
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressIndividualField($index)
    {
        return isset($this->addressIndividualField[$index]);
    }

    /**
     * unset addressIndividualField
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressIndividualField($index)
    {
        unset($this->addressIndividualField[$index]);
    }

    /**
     * Gets as addressIndividualField
     *
     * @return \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType[]
     */
    public function getAddressIndividualField()
    {
        return $this->addressIndividualField;
    }

    /**
     * Sets a new addressIndividualField
     *
     * @param \Conecto\FeratelDsi\Dtos\ONAXAddressIndividualFieldItemType[] $addressIndividualField
     * @return self
     */
    public function setAddressIndividualField(array $addressIndividualField)
    {
        $this->addressIndividualField = $addressIndividualField;
        return $this;
    }
}

