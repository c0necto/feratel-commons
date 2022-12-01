<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageOccupancyType
 *
 *
 * XSD Type: BDPackageOccupancy
 */
class BDPackageOccupancyType
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

    public function __construct(\Conecto\FeratelDsi\Dtos\OccupancyType $beds = null, \Conecto\FeratelDsi\Dtos\OccupancyType $adults = null, \Conecto\FeratelDsi\Dtos\OccupancyType $children = null)
    {
        $this->beds = $beds;
        $this->adults = $adults;
        $this->children = $children;
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
    public function setBeds(?\Conecto\FeratelDsi\Dtos\OccupancyType $beds = null)
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
    public function setAdults(?\Conecto\FeratelDsi\Dtos\OccupancyType $adults = null)
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
    public function setChildren(?\Conecto\FeratelDsi\Dtos\OccupancyType $children = null)
    {
        $this->children = $children;
        return $this;
    }
}

