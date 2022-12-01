<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing MarketingGroupListType
 *
 *
 * XSD Type: MarketingGroupList
 */
class MarketingGroupListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $marketingGroup
     */
    private $marketingGroup = [
        
    ];

    public function __construct(array $marketingGroup = null)
    {
        $this->marketingGroup = $marketingGroup;
    }

    /**
     * Adds as marketingGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $marketingGroup
     */
    public function addToMarketingGroup(\Conecto\FeratelDsi\Dtos\ClassificationType $marketingGroup)
    {
        $this->marketingGroup[] = $marketingGroup;
        return $this;
    }

    /**
     * isset marketingGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingGroup($index)
    {
        return isset($this->marketingGroup[$index]);
    }

    /**
     * unset marketingGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingGroup($index)
    {
        unset($this->marketingGroup[$index]);
    }

    /**
     * Gets as marketingGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getMarketingGroup()
    {
        return $this->marketingGroup;
    }

    /**
     * Sets a new marketingGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $marketingGroup
     * @return self
     */
    public function setMarketingGroup(array $marketingGroup = null)
    {
        $this->marketingGroup = $marketingGroup;
        return $this;
    }
}

