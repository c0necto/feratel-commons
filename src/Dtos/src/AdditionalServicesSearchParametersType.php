<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing AdditionalServicesSearchParametersType
 *
 * Provides one set of search parameters information for request of availability.
 * XSD Type: AdditionalServicesSearchParametersType
 */
class AdditionalServicesSearchParametersType
{
    /**
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @var int $index
     */
    private $index = null;

    /**
     * Identifies Sales Channel for request of availability. Allowed valid GUIDs {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
     *
     * @var string $salesChannel
     */
    private $salesChannel = null;

    /**
     * Provides product units information for request of availability. Allowed from 1 to 999.
     *
     * @var int $units
     */
    private $units = null;

    /**
     * Provides number of nights information for request of availability. Allowed from 1 to 999.
     *
     * @var int $days
     */
    private $days = null;

    /**
     * @var \DateTime $from
     */
    private $from = null;

    /**
     * @var \DateTime $to
     */
    private $to = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedServiceProviderIDs
     */
    private $preSelectedServiceProviderIDs = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceProviderType $serviceProvider
     */
    private $serviceProvider = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly
     */
    private $bookOnly = null;

    public function __construct(int $index = null, string $salesChannel = null, int $units = null, int $days = null, \DateTime $from = null, \DateTime $to = null, array $preSelectedServiceProviderIDs = null, \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceProviderType $serviceProvider = null, \Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly = null)
    {
        $this->index = $index;
        $this->salesChannel = $salesChannel;
        $this->units = $units;
        $this->days = $days;
        $this->from = $from;
        $this->to = $to;
        $this->preSelectedServiceProviderIDs = $preSelectedServiceProviderIDs;
        $this->serviceProvider = $serviceProvider;
        $this->bookOnly = $bookOnly;
    }

    /**
     * Gets as index
     *
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @param int $index
     * @return self
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as salesChannel
     *
     * Identifies Sales Channel for request of availability. Allowed valid GUIDs {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
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
     * Identifies Sales Channel for request of availability. Allowed valid GUIDs {xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}.
     *
     * @param string $salesChannel
     * @return self
     */
    public function setSalesChannel($salesChannel)
    {
        $this->salesChannel = $salesChannel;
        return $this;
    }

    /**
     * Gets as units
     *
     * Provides product units information for request of availability. Allowed from 1 to 999.
     *
     * @return int
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * Provides product units information for request of availability. Allowed from 1 to 999.
     *
     * @param int $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * Gets as days
     *
     * Provides number of nights information for request of availability. Allowed from 1 to 999.
     *
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Sets a new days
     *
     * Provides number of nights information for request of availability. Allowed from 1 to 999.
     *
     * @param int $days
     * @return self
     */
    public function setDays($days)
    {
        $this->days = $days;
        return $this;
    }

    /**
     * Gets as from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \DateTime $from
     * @return self
     */
    public function setFrom(\DateTime $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \DateTime $to
     * @return self
     */
    public function setTo(\DateTime $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item
     */
    public function addToPreSelectedServiceProviderIDs(\Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item)
    {
        $this->preSelectedServiceProviderIDs[] = $item;
        return $this;
    }

    /**
     * isset preSelectedServiceProviderIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreSelectedServiceProviderIDs($index)
    {
        return isset($this->preSelectedServiceProviderIDs[$index]);
    }

    /**
     * unset preSelectedServiceProviderIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreSelectedServiceProviderIDs($index)
    {
        unset($this->preSelectedServiceProviderIDs[$index]);
    }

    /**
     * Gets as preSelectedServiceProviderIDs
     *
     * @return \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[]
     */
    public function getPreSelectedServiceProviderIDs()
    {
        return $this->preSelectedServiceProviderIDs;
    }

    /**
     * Sets a new preSelectedServiceProviderIDs
     *
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedServiceProviderIDs
     * @return self
     */
    public function setPreSelectedServiceProviderIDs(array $preSelectedServiceProviderIDs = null)
    {
        $this->preSelectedServiceProviderIDs = $preSelectedServiceProviderIDs;
        return $this;
    }

    /**
     * Gets as serviceProvider
     *
     * @return \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceProviderType
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * Sets a new serviceProvider
     *
     * @param \Conecto\FeratelDsi\Dtos\SearchAdditionalServiceProviderType $serviceProvider
     * @return self
     */
    public function setServiceProvider(?\Conecto\FeratelDsi\Dtos\SearchAdditionalServiceProviderType $serviceProvider = null)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * Gets as bookOnly
     *
     * @return \Conecto\FeratelDsi\Dtos\BookOnlyType
     */
    public function getBookOnly()
    {
        return $this->bookOnly;
    }

    /**
     * Sets a new bookOnly
     *
     * @param \Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly
     * @return self
     */
    public function setBookOnly(?\Conecto\FeratelDsi\Dtos\BookOnlyType $bookOnly = null)
    {
        $this->bookOnly = $bookOnly;
        return $this;
    }
}

