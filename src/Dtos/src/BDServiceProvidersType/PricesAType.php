<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProvidersType;

/**
 * Class representing PricesAType
 */
class PricesAType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var string $salesChannel
     */
    private $salesChannel = null;

    public function __construct(\DateTime $dateFrom = null, string $salesChannel = null)
    {
        $this->dateFrom = $dateFrom;
        $this->salesChannel = $salesChannel;
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
     * Gets as salesChannel
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->salesChannel;
    }

    /**
     * Sets a new salesChannel
     *
     * @param string $salesChannel
     * @return self
     */
    public function setSalesChannel($salesChannel)
    {
        $this->salesChannel = $salesChannel;
        return $this;
    }
}

