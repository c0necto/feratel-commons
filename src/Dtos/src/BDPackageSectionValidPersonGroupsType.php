<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionValidPersonGroupsType
 *
 *
 * XSD Type: BDPackageSectionValidPersonGroups
 */
class BDPackageSectionValidPersonGroupsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\AdultAType $adult
     */
    private $adult = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\ChildAType[] $child
     */
    private $child = [
        
    ];

    public function __construct(\Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\AdultAType $adult = null, array $child = null)
    {
        $this->adult = $adult;
        $this->child = $child;
    }

    /**
     * Gets as adult
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\AdultAType
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Sets a new adult
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\AdultAType $adult
     * @return self
     */
    public function setAdult(\Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\AdultAType $adult)
    {
        $this->adult = $adult;
        return $this;
    }

    /**
     * Adds as child
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\ChildAType $child
     */
    public function addToChild(\Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\ChildAType $child)
    {
        $this->child[] = $child;
        return $this;
    }

    /**
     * isset child
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChild($index)
    {
        return isset($this->child[$index]);
    }

    /**
     * unset child
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChild($index)
    {
        unset($this->child[$index]);
    }

    /**
     * Gets as child
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\ChildAType[]
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * Sets a new child
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType\ChildAType[] $child
     * @return self
     */
    public function setChild(array $child = null)
    {
        $this->child = $child;
        return $this;
    }
}

