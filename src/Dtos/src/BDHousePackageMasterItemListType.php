<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDHousePackageMasterItemListType
 *
 *
 * XSD Type: BDHousePackageMasterItemList
 */
class BDHousePackageMasterItemListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[] $housePackageMaster
     */
    private $housePackageMaster = [
        
    ];

    public function __construct(array $housePackageMaster = null)
    {
        $this->housePackageMaster = $housePackageMaster;
    }

    /**
     * Adds as housePackageMaster
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType $housePackageMaster
     */
    public function addToHousePackageMaster(\Conecto\FeratelDsi\Dtos\BDHousePackageMasterType $housePackageMaster)
    {
        $this->housePackageMaster[] = $housePackageMaster;
        return $this;
    }

    /**
     * isset housePackageMaster
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHousePackageMaster($index)
    {
        return isset($this->housePackageMaster[$index]);
    }

    /**
     * unset housePackageMaster
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHousePackageMaster($index)
    {
        unset($this->housePackageMaster[$index]);
    }

    /**
     * Gets as housePackageMaster
     *
     * @return \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[]
     */
    public function getHousePackageMaster()
    {
        return $this->housePackageMaster;
    }

    /**
     * Sets a new housePackageMaster
     *
     * @param \Conecto\FeratelDsi\Dtos\BDHousePackageMasterType[] $housePackageMaster
     * @return self
     */
    public function setHousePackageMaster(array $housePackageMaster = null)
    {
        $this->housePackageMaster = $housePackageMaster;
        return $this;
    }
}

