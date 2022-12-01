<?php

namespace Conecto\FeratelDsi\Dtos\BDServiceProvidersType;

use Conecto\FeratelDsi\Dtos\BasicElementType;

/**
 * Class representing ClosedPeriodsAType
 */
class ClosedPeriodsAType extends BasicElementType
{
    /**
     * @var string $salesChannel
     */
    private $salesChannel = null;

    public function __construct(string $salesChannel = null, \DateTime $dateFrom = null)
    {
        $this->salesChannel = $salesChannel;
        parent::__construct($dateFrom);
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

