<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ONAXBasicDataRequestType
 *
 *
 * XSD Type: ONAXBasicDataRequestType
 */
class ONAXBasicDataRequestType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var string $addressLinkFilter
     */
    private $addressLinkFilter = null;

    public function __construct(\DateTime $dateFrom = null, string $addressLinkFilter = null)
    {
        $this->dateFrom = $dateFrom;
        $this->addressLinkFilter = $addressLinkFilter;
    }

    /**
     * Gets as dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as addressLinkFilter
     *
     * @return string
     */
    public function getAddressLinkFilter()
    {
        return $this->addressLinkFilter;
    }

    /**
     * Sets a new addressLinkFilter
     *
     * @param string $addressLinkFilter
     * @return self
     */
    public function setAddressLinkFilter($addressLinkFilter)
    {
        $this->addressLinkFilter = $addressLinkFilter;
        return $this;
    }
}

