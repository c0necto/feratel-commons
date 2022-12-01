<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDOccupancyType
 *
 *
 * XSD Type: BDOccupancyType
 */
class BDOccupancyType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\OccupancyType $beds
     */
    private $beds = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\OccupancyType $adults
     */
    private $adults = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\OccupancyType $children
     */
    private $children = null;

    /**
     * @var int $minFullPayer
     */
    private $minFullPayer = null;

    public function __construct(\Conecto\FeratelDsi\Dtos\OccupancyType $beds = null, \Conecto\FeratelDsi\Dtos\OccupancyType $adults = null, \Conecto\FeratelDsi\Dtos\OccupancyType $children = null, int $minFullPayer = null)
    {
        $this->beds = $beds;
        $this->adults = $adults;
        $this->children = $children;
        $this->minFullPayer = $minFullPayer;
    }

    /**
     * Gets as beds
     *
     * @return \Conecto\FeratelDsi\Dtos\OccupancyType
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * Sets a new beds
     *
     * @param \Conecto\FeratelDsi\Dtos\OccupancyType $beds
     * @return self
     */
    public function setBeds(\Conecto\FeratelDsi\Dtos\OccupancyType $beds)
    {
        $this->beds = $beds;
        return $this;
    }

    /**
     * Gets as adults
     *
     * @return \Conecto\FeratelDsi\Dtos\OccupancyType
     */
    public function getAdults()
    {
        return $this->adults;
    }

    /**
     * Sets a new adults
     *
     * @param \Conecto\FeratelDsi\Dtos\OccupancyType $adults
     * @return self
     */
    public function setAdults(\Conecto\FeratelDsi\Dtos\OccupancyType $adults)
    {
        $this->adults = $adults;
        return $this;
    }

    /**
     * Gets as children
     *
     * @return \Conecto\FeratelDsi\Dtos\OccupancyType
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets a new children
     *
     * @param \Conecto\FeratelDsi\Dtos\OccupancyType $children
     * @return self
     */
    public function setChildren(\Conecto\FeratelDsi\Dtos\OccupancyType $children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * Gets as minFullPayer
     *
     * @return int
     */
    public function getMinFullPayer()
    {
        return $this->minFullPayer;
    }

    /**
     * Sets a new minFullPayer
     *
     * @param int $minFullPayer
     * @return self
     */
    public function setMinFullPayer($minFullPayer)
    {
        $this->minFullPayer = $minFullPayer;
        return $this;
    }
}

