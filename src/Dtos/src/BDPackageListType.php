<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageListType
 *
 *
 * XSD Type: BDPackageList
 */
class BDPackageListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageItemType[] $package
     */
    private $package = [
        
    ];

    public function __construct(array $package = null)
    {
        $this->package = $package;
    }

    /**
     * Adds as package
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageItemType $package
     */
    public function addToPackage(\Conecto\FeratelDsi\Dtos\BDPackageItemType $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageItemType[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageItemType[] $package
     * @return self
     */
    public function setPackage(array $package)
    {
        $this->package = $package;
        return $this;
    }
}

