<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDGapListType
 *
 *
 * XSD Type: BDGapList
 */
class BDGapListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDGapType[] $gap
     */
    private $gap = [
        
    ];

    public function __construct(array $gap = null)
    {
        $this->gap = $gap;
    }

    /**
     * Adds as gap
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDGapType $gap
     */
    public function addToGap(\Conecto\FeratelDsi\Dtos\BDGapType $gap)
    {
        $this->gap[] = $gap;
        return $this;
    }

    /**
     * isset gap
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGap($index)
    {
        return isset($this->gap[$index]);
    }

    /**
     * unset gap
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGap($index)
    {
        unset($this->gap[$index]);
    }

    /**
     * Gets as gap
     *
     * @return \Conecto\FeratelDsi\Dtos\BDGapType[]
     */
    public function getGap()
    {
        return $this->gap;
    }

    /**
     * Sets a new gap
     *
     * @param \Conecto\FeratelDsi\Dtos\BDGapType[] $gap
     * @return self
     */
    public function setGap(array $gap = null)
    {
        $this->gap = $gap;
        return $this;
    }
}

