<?php

namespace Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType;

/**
 * Class representing DependencyRulesAType
 */
class DependencyRulesAType
{
    /**
     * @var int $startDaysAfter
     */
    private $startDaysAfter = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $dependendSectionId
     */
    private $dependendSectionId = null;

    public function __construct(int $startDaysAfter = null, string $type = null, string $dependendSectionId = null)
    {
        $this->startDaysAfter = $startDaysAfter;
        $this->type = $type;
        $this->dependendSectionId = $dependendSectionId;
    }

    /**
     * Gets as startDaysAfter
     *
     * @return int
     */
    public function getStartDaysAfter()
    {
        return $this->startDaysAfter;
    }

    /**
     * Sets a new startDaysAfter
     *
     * @param int $startDaysAfter
     * @return self
     */
    public function setStartDaysAfter($startDaysAfter)
    {
        $this->startDaysAfter = $startDaysAfter;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as dependendSectionId
     *
     * @return string
     */
    public function getDependendSectionId()
    {
        return $this->dependendSectionId;
    }

    /**
     * Sets a new dependendSectionId
     *
     * @param string $dependendSectionId
     * @return self
     */
    public function setDependendSectionId($dependendSectionId)
    {
        $this->dependendSectionId = $dependendSectionId;
        return $this;
    }
}

