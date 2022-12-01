<?php

namespace Conecto\FeratelDsi\Dtos\ShoppingCartType\ContentAType\CartItemsAType\PackagesAType\PackageItemAType;

/**
 * Class representing OccupancyAType
 */
class OccupancyAType
{
    /**
     * @var int $numberOfAdults
     */
    private $numberOfAdults = null;

    /**
     * @var string $childrenAges
     */
    private $childrenAges = null;

    public function __construct(int $numberOfAdults = null, string $childrenAges = null)
    {
        $this->numberOfAdults = $numberOfAdults;
        $this->childrenAges = $childrenAges;
    }

    /**
     * Gets as numberOfAdults
     *
     * @return int
     */
    public function getNumberOfAdults()
    {
        return $this->numberOfAdults;
    }

    /**
     * Sets a new numberOfAdults
     *
     * @param int $numberOfAdults
     * @return self
     */
    public function setNumberOfAdults($numberOfAdults)
    {
        $this->numberOfAdults = $numberOfAdults;
        return $this;
    }

    /**
     * Gets as childrenAges
     *
     * @return string
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }

    /**
     * Sets a new childrenAges
     *
     * @param string $childrenAges
     * @return self
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
        return $this;
    }
}

