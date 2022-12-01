<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchPackageParametersType
 *
 *
 * XSD Type: SearchPackageParametersType
 */
class SearchPackageParametersType
{
    /**
     * Provides search index for request of availability. Allowed from 1 to 3.
     *
     * @var int $index
     */
    private $index = null;

    /**
     * @var string $salesChannel
     */
    private $salesChannel = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $providerCode
     */
    private $providerCode = null;

    /**
     * @var string $providerName
     */
    private $providerName = null;

    /**
     * @var int $toleranceDays
     */
    private $toleranceDays = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedHolidayThemeIDs
     */
    private $preSelectedHolidayThemeIDs = null;

    public function __construct(int $index = null, string $salesChannel = null, \DateTime $startDate = null, string $name = null, string $providerCode = null, string $providerName = null, int $toleranceDays = null, array $preSelectedHolidayThemeIDs = null)
    {
        $this->index = $index;
        $this->salesChannel = $salesChannel;
        $this->startDate = $startDate;
        $this->name = $name;
        $this->providerCode = $providerCode;
        $this->providerName = $providerName;
        $this->toleranceDays = $toleranceDays;
        $this->preSelectedHolidayThemeIDs = $preSelectedHolidayThemeIDs;
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

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
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
     * Gets as providerCode
     *
     * @return string
     */
    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * Sets a new providerCode
     *
     * @param string $providerCode
     * @return self
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
        return $this;
    }

    /**
     * Gets as providerName
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * @param string $providerName
     * @return self
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        return $this;
    }

    /**
     * Gets as toleranceDays
     *
     * @return int
     */
    public function getToleranceDays()
    {
        return $this->toleranceDays;
    }

    /**
     * Sets a new toleranceDays
     *
     * @param int $toleranceDays
     * @return self
     */
    public function setToleranceDays($toleranceDays)
    {
        $this->toleranceDays = $toleranceDays;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item
     */
    public function addToPreSelectedHolidayThemeIDs(\Conecto\FeratelDsi\Dtos\GuidListType\ItemAType $item)
    {
        $this->preSelectedHolidayThemeIDs[] = $item;
        return $this;
    }

    /**
     * isset preSelectedHolidayThemeIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreSelectedHolidayThemeIDs($index)
    {
        return isset($this->preSelectedHolidayThemeIDs[$index]);
    }

    /**
     * unset preSelectedHolidayThemeIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreSelectedHolidayThemeIDs($index)
    {
        unset($this->preSelectedHolidayThemeIDs[$index]);
    }

    /**
     * Gets as preSelectedHolidayThemeIDs
     *
     * @return \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[]
     */
    public function getPreSelectedHolidayThemeIDs()
    {
        return $this->preSelectedHolidayThemeIDs;
    }

    /**
     * Sets a new preSelectedHolidayThemeIDs
     *
     * @param \Conecto\FeratelDsi\Dtos\GuidListType\ItemAType[] $preSelectedHolidayThemeIDs
     * @return self
     */
    public function setPreSelectedHolidayThemeIDs(array $preSelectedHolidayThemeIDs = null)
    {
        $this->preSelectedHolidayThemeIDs = $preSelectedHolidayThemeIDs;
        return $this;
    }
}

