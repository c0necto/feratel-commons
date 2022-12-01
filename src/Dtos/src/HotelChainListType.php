<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HotelChainListType
 *
 *
 * XSD Type: HotelChainList
 */
class HotelChainListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $hotelChain
     */
    private $hotelChain = [
        
    ];

    public function __construct(array $hotelChain = null)
    {
        $this->hotelChain = $hotelChain;
    }

    /**
     * Adds as hotelChain
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $hotelChain
     */
    public function addToHotelChain(\Conecto\FeratelDsi\Dtos\ClassificationType $hotelChain)
    {
        $this->hotelChain[] = $hotelChain;
        return $this;
    }

    /**
     * isset hotelChain
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelChain($index)
    {
        return isset($this->hotelChain[$index]);
    }

    /**
     * unset hotelChain
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelChain($index)
    {
        unset($this->hotelChain[$index]);
    }

    /**
     * Gets as hotelChain
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getHotelChain()
    {
        return $this->hotelChain;
    }

    /**
     * Sets a new hotelChain
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $hotelChain
     * @return self
     */
    public function setHotelChain(array $hotelChain = null)
    {
        $this->hotelChain = $hotelChain;
        return $this;
    }
}

