<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLMarketingCodeGroupListType
 *
 *
 * XSD Type: NLMarketingCodeGroupList
 */
class NLMarketingCodeGroupListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType[] $marketingCodeGroup
     */
    private $marketingCodeGroup = [
        
    ];

    public function __construct(array $marketingCodeGroup = null)
    {
        $this->marketingCodeGroup = $marketingCodeGroup;
    }

    /**
     * Adds as marketingCodeGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType $marketingCodeGroup
     */
    public function addToMarketingCodeGroup(\Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType $marketingCodeGroup)
    {
        $this->marketingCodeGroup[] = $marketingCodeGroup;
        return $this;
    }

    /**
     * isset marketingCodeGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingCodeGroup($index)
    {
        return isset($this->marketingCodeGroup[$index]);
    }

    /**
     * unset marketingCodeGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingCodeGroup($index)
    {
        unset($this->marketingCodeGroup[$index]);
    }

    /**
     * Gets as marketingCodeGroup
     *
     * @return \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType[]
     */
    public function getMarketingCodeGroup()
    {
        return $this->marketingCodeGroup;
    }

    /**
     * Sets a new marketingCodeGroup
     *
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType[] $marketingCodeGroup
     * @return self
     */
    public function setMarketingCodeGroup(array $marketingCodeGroup = null)
    {
        $this->marketingCodeGroup = $marketingCodeGroup;
        return $this;
    }
}

