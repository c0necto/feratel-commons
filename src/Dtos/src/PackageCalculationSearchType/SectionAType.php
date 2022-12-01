<?php

namespace Conecto\FeratelDsi\Dtos\PackageCalculationSearchType;

/**
 * Class representing SectionAType
 */
class SectionAType
{
    /**
     * @var string $sectionId
     */
    private $sectionId = null;

    /**
     * @var string $productId
     */
    private $productId = null;

    /**
     * @var int $units
     */
    private $units = null;

    /**
     * @var int $adults
     */
    private $adults = null;

    /**
     * @var string $children
     */
    private $children = null;

    /**
     * @var int $additionalNights
     */
    private $additionalNights = null;

    public function __construct(string $sectionId = null, string $productId = null, int $units = null, int $adults = null, string $children = null, int $additionalNights = null)
    {
        $this->sectionId = $sectionId;
        $this->productId = $productId;
        $this->units = $units;
        $this->adults = $adults;
        $this->children = $children;
        $this->additionalNights = $additionalNights;
    }

    /**
     * Gets as sectionId
     *
     * @return string
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Sets a new sectionId
     *
     * @param string $sectionId
     * @return self
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;
        return $this;
    }

    /**
     * Gets as productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * @param string $productId
     * @return self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * Gets as units
     *
     * @return int
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * @param int $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * Gets as adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * Sets a new adults
     *
     * @param int $adults
     * @return self
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * Gets as children
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param string $children
     * @return self
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * Gets as additionalNights
     *
     * @return int
     */
    public function getAdditionalNights()
    {
        return $this->additionalNights;
    }

    /**
     * Sets a new additionalNights
     *
     * @param int $additionalNights
     * @return self
     */
    public function setAdditionalNights($additionalNights)
    {
        $this->additionalNights = $additionalNights;
        return $this;
    }
}

