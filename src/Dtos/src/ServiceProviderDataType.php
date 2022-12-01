<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ServiceProviderDataType
 *
 *
 * XSD Type: ServiceProviderDataType
 */
class ServiceProviderDataType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $townId
     */
    private $townId = null;

    /**
     * @var string $townName
     */
    private $townName = null;

    /**
     * @var string $districtName
     */
    private $districtName = null;

    /**
     * @var string $databaseCode
     */
    private $databaseCode = null;

    /**
     * @var string $settlerCode
     */
    private $settlerCode = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\RatingAType $rating
     */
    private $rating = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\MatchAType $match
     */
    private $match = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\GeoDistanceAType $geoDistance
     */
    private $geoDistance = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType[] $services
     */
    private $services = null;

    public function __construct(string $id = null, string $code = null, string $name = null, string $townId = null, string $townName = null, string $districtName = null, string $databaseCode = null, string $settlerCode = null, \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\RatingAType $rating = null, \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\MatchAType $match = null, \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\GeoDistanceAType $geoDistance = null, array $services = null)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->townId = $townId;
        $this->townName = $townName;
        $this->districtName = $districtName;
        $this->databaseCode = $databaseCode;
        $this->settlerCode = $settlerCode;
        $this->rating = $rating;
        $this->match = $match;
        $this->geoDistance = $geoDistance;
        $this->services = $services;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as townId
     *
     * @return string
     */
    public function getTownId()
    {
        return $this->townId;
    }

    /**
     * Sets a new townId
     *
     * @param string $townId
     * @return self
     */
    public function setTownId($townId)
    {
        $this->townId = $townId;
        return $this;
    }

    /**
     * Gets as townName
     *
     * @return string
     */
    public function getTownName()
    {
        return $this->townName;
    }

    /**
     * Sets a new townName
     *
     * @param string $townName
     * @return self
     */
    public function setTownName($townName)
    {
        $this->townName = $townName;
        return $this;
    }

    /**
     * Gets as districtName
     *
     * @return string
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * Sets a new districtName
     *
     * @param string $districtName
     * @return self
     */
    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;
        return $this;
    }

    /**
     * Gets as databaseCode
     *
     * @return string
     */
    public function getDatabaseCode()
    {
        return $this->databaseCode;
    }

    /**
     * Sets a new databaseCode
     *
     * @param string $databaseCode
     * @return self
     */
    public function setDatabaseCode($databaseCode)
    {
        $this->databaseCode = $databaseCode;
        return $this;
    }

    /**
     * Gets as settlerCode
     *
     * @return string
     */
    public function getSettlerCode()
    {
        return $this->settlerCode;
    }

    /**
     * Sets a new settlerCode
     *
     * @param string $settlerCode
     * @return self
     */
    public function setSettlerCode($settlerCode)
    {
        $this->settlerCode = $settlerCode;
        return $this;
    }

    /**
     * Gets as rating
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\RatingAType
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\RatingAType $rating
     * @return self
     */
    public function setRating(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\RatingAType $rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Gets as match
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\MatchAType
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Sets a new match
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\MatchAType $match
     * @return self
     */
    public function setMatch(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\MatchAType $match)
    {
        $this->match = $match;
        return $this;
    }

    /**
     * Gets as geoDistance
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\GeoDistanceAType
     */
    public function getGeoDistance()
    {
        return $this->geoDistance;
    }

    /**
     * Sets a new geoDistance
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\GeoDistanceAType $geoDistance
     * @return self
     */
    public function setGeoDistance(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\GeoDistanceAType $geoDistance)
    {
        $this->geoDistance = $geoDistance;
        return $this;
    }

    /**
     * Adds as service
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType $service
     */
    public function addToServices(\Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType $service)
    {
        $this->services[] = $service;
        return $this;
    }

    /**
     * isset services
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServices($index)
    {
        return isset($this->services[$index]);
    }

    /**
     * unset services
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServices($index)
    {
        unset($this->services[$index]);
    }

    /**
     * Gets as services
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderDataType\ServicesAType\ServiceAType[] $services
     * @return self
     */
    public function setServices(array $services)
    {
        $this->services = $services;
        return $this;
    }
}

