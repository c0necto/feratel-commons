<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDVariationListType
 *
 *
 * XSD Type: BDVariationList
 */
class BDVariationListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDVariationItemType[] $variation
     */
    private $variation = [
        
    ];

    public function __construct(array $variation = null)
    {
        $this->variation = $variation;
    }

    /**
     * Adds as variation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDVariationItemType $variation
     */
    public function addToVariation(\Conecto\FeratelDsi\Dtos\BDVariationItemType $variation)
    {
        $this->variation[] = $variation;
        return $this;
    }

    /**
     * isset variation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariation($index)
    {
        return isset($this->variation[$index]);
    }

    /**
     * unset variation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariation($index)
    {
        unset($this->variation[$index]);
    }

    /**
     * Gets as variation
     *
     * @return \Conecto\FeratelDsi\Dtos\BDVariationItemType[]
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Sets a new variation
     *
     * @param \Conecto\FeratelDsi\Dtos\BDVariationItemType[] $variation
     * @return self
     */
    public function setVariation(array $variation)
    {
        $this->variation = $variation;
        return $this;
    }
}

