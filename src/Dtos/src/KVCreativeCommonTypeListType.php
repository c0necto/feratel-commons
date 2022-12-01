<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KVCreativeCommonTypeListType
 *
 *
 * XSD Type: KVCreativeCommonTypeList
 */
class KVCreativeCommonTypeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\KVCreativeCommonType[] $creativeCommon
     */
    private $creativeCommon = [
        
    ];

    public function __construct(array $creativeCommon = null)
    {
        $this->creativeCommon = $creativeCommon;
    }

    /**
     * Adds as creativeCommon
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVCreativeCommonType $creativeCommon
     */
    public function addToCreativeCommon(\Conecto\FeratelDsi\Dtos\KVCreativeCommonType $creativeCommon)
    {
        $this->creativeCommon[] = $creativeCommon;
        return $this;
    }

    /**
     * isset creativeCommon
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreativeCommon($index)
    {
        return isset($this->creativeCommon[$index]);
    }

    /**
     * unset creativeCommon
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreativeCommon($index)
    {
        unset($this->creativeCommon[$index]);
    }

    /**
     * Gets as creativeCommon
     *
     * @return \Conecto\FeratelDsi\Dtos\KVCreativeCommonType[]
     */
    public function getCreativeCommon()
    {
        return $this->creativeCommon;
    }

    /**
     * Sets a new creativeCommon
     *
     * @param \Conecto\FeratelDsi\Dtos\KVCreativeCommonType[] $creativeCommon
     * @return self
     */
    public function setCreativeCommon(array $creativeCommon = null)
    {
        $this->creativeCommon = $creativeCommon;
        return $this;
    }
}

