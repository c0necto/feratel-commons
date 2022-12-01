<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplateChildReductionListType
 *
 *
 * XSD Type: BDPriceTemplateChildReductionList
 */
class BDPriceTemplateChildReductionListType
{
    /**
     * @var int $freeChildren
     */
    private $freeChildren = null;

    /**
     * @var int $freeChildMaxAge
     */
    private $freeChildMaxAge = null;

    /**
     * @var string $childFreeType
     */
    private $childFreeType = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType\ChildReductionAType[] $childReduction
     */
    private $childReduction = [
        
    ];

    public function __construct(int $freeChildren = null, int $freeChildMaxAge = null, string $childFreeType = null, array $childReduction = null)
    {
        $this->freeChildren = $freeChildren;
        $this->freeChildMaxAge = $freeChildMaxAge;
        $this->childFreeType = $childFreeType;
        $this->childReduction = $childReduction;
    }

    /**
     * Gets as freeChildren
     *
     * @return int
     */
    public function getFreeChildren()
    {
        return $this->freeChildren;
    }

    /**
     * Sets a new freeChildren
     *
     * @param int $freeChildren
     * @return self
     */
    public function setFreeChildren($freeChildren)
    {
        $this->freeChildren = $freeChildren;
        return $this;
    }

    /**
     * Gets as freeChildMaxAge
     *
     * @return int
     */
    public function getFreeChildMaxAge()
    {
        return $this->freeChildMaxAge;
    }

    /**
     * Sets a new freeChildMaxAge
     *
     * @param int $freeChildMaxAge
     * @return self
     */
    public function setFreeChildMaxAge($freeChildMaxAge)
    {
        $this->freeChildMaxAge = $freeChildMaxAge;
        return $this;
    }

    /**
     * Gets as childFreeType
     *
     * @return string
     */
    public function getChildFreeType()
    {
        return $this->childFreeType;
    }

    /**
     * Sets a new childFreeType
     *
     * @param string $childFreeType
     * @return self
     */
    public function setChildFreeType($childFreeType)
    {
        $this->childFreeType = $childFreeType;
        return $this;
    }

    /**
     * Adds as childReduction
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType\ChildReductionAType $childReduction
     */
    public function addToChildReduction(\Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType\ChildReductionAType $childReduction)
    {
        $this->childReduction[] = $childReduction;
        return $this;
    }

    /**
     * isset childReduction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildReduction($index)
    {
        return isset($this->childReduction[$index]);
    }

    /**
     * unset childReduction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildReduction($index)
    {
        unset($this->childReduction[$index]);
    }

    /**
     * Gets as childReduction
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType\ChildReductionAType[]
     */
    public function getChildReduction()
    {
        return $this->childReduction;
    }

    /**
     * Sets a new childReduction
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateChildReductionListType\ChildReductionAType[] $childReduction
     * @return self
     */
    public function setChildReduction(array $childReduction = null)
    {
        $this->childReduction = $childReduction;
        return $this;
    }
}

