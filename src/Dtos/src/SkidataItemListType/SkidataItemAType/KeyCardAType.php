<?php

namespace Conecto\FeratelDsi\Dtos\SkidataItemListType\SkidataItemAType;

/**
 * Class representing KeyCardAType
 */
class KeyCardAType
{
    /**
     * @var string $chipId
     */
    private $chipId = null;

    /**
     * @var string $serialNumber
     */
    private $serialNumber = null;

    /**
     * @var string $luhn
     */
    private $luhn = null;

    public function __construct(string $chipId = null, string $serialNumber = null, string $luhn = null)
    {
        $this->chipId = $chipId;
        $this->serialNumber = $serialNumber;
        $this->luhn = $luhn;
    }

    /**
     * Gets as chipId
     *
     * @return string
     */
    public function getChipId()
    {
        return $this->chipId;
    }

    /**
     * Sets a new chipId
     *
     * @param string $chipId
     * @return self
     */
    public function setChipId($chipId)
    {
        $this->chipId = $chipId;
        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber
     *
     * @param string $serialNumber
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Gets as luhn
     *
     * @return string
     */
    public function getLuhn()
    {
        return $this->luhn;
    }

    /**
     * Sets a new luhn
     *
     * @param string $luhn
     * @return self
     */
    public function setLuhn($luhn)
    {
        $this->luhn = $luhn;
        return $this;
    }
}

