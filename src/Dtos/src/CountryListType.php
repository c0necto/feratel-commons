<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CountryListType
 *
 *
 * XSD Type: CountryList
 */
class CountryListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CountryType[] $country
     */
    private $country = [
        
    ];

    public function __construct(array $country = null)
    {
        $this->country = $country;
    }

    /**
     * Adds as country
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CountryType $country
     */
    public function addToCountry(\Conecto\FeratelDsi\Dtos\CountryType $country)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * isset country
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountry($index)
    {
        return isset($this->country[$index]);
    }

    /**
     * unset country
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountry($index)
    {
        unset($this->country[$index]);
    }

    /**
     * Gets as country
     *
     * @return \Conecto\FeratelDsi\Dtos\CountryType[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \Conecto\FeratelDsi\Dtos\CountryType[] $country
     * @return self
     */
    public function setCountry(array $country = null)
    {
        $this->country = $country;
        return $this;
    }
}

