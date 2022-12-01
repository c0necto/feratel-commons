<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDRevenueSettingItemListType
 *
 *
 * XSD Type: BDRevenueSettingItemList
 */
class BDRevenueSettingItemListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[] $revenueSetting
     */
    private $revenueSetting = [
        
    ];

    public function __construct(array $revenueSetting = null)
    {
        $this->revenueSetting = $revenueSetting;
    }

    /**
     * Adds as revenueSetting
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType $revenueSetting
     */
    public function addToRevenueSetting(\Conecto\FeratelDsi\Dtos\BDRevenueSettingType $revenueSetting)
    {
        $this->revenueSetting[] = $revenueSetting;
        return $this;
    }

    /**
     * isset revenueSetting
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueSetting($index)
    {
        return isset($this->revenueSetting[$index]);
    }

    /**
     * unset revenueSetting
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueSetting($index)
    {
        unset($this->revenueSetting[$index]);
    }

    /**
     * Gets as revenueSetting
     *
     * @return \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[]
     */
    public function getRevenueSetting()
    {
        return $this->revenueSetting;
    }

    /**
     * Sets a new revenueSetting
     *
     * @param \Conecto\FeratelDsi\Dtos\BDRevenueSettingType[] $revenueSetting
     * @return self
     */
    public function setRevenueSetting(array $revenueSetting = null)
    {
        $this->revenueSetting = $revenueSetting;
        return $this;
    }
}

