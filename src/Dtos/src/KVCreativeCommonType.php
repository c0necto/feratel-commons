<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KVCreativeCommonType
 *
 *
 * XSD Type: KVCreativeCommonType
 */
class KVCreativeCommonType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var float $version
     */
    private $version = null;

    /**
     * @var bool $approvedFree
     */
    private $approvedFree = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    public function __construct(string $id = null, string $country = null, string $code = null, string $name = null, float $version = null, bool $approvedFree = null, int $order = null, string $uRL = null, \DateTime $changeDate = null)
    {
        $this->id = $id;
        $this->country = $country;
        $this->code = $code;
        $this->name = $name;
        $this->version = $version;
        $this->approvedFree = $approvedFree;
        $this->order = $order;
        $this->uRL = $uRL;
        $this->changeDate = $changeDate;
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
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Gets as version
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as approvedFree
     *
     * @return bool
     */
    public function getApprovedFree()
    {
        return $this->approvedFree;
    }

    /**
     * Sets a new approvedFree
     *
     * @param bool $approvedFree
     * @return self
     */
    public function setApprovedFree($approvedFree)
    {
        $this->approvedFree = $approvedFree;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }
}

