<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLKeyValueDataType
 *
 *
 * XSD Type: NLKeyValueDataType
 */
class NLKeyValueDataType
{
    /**
     * @var string $originator
     */
    private $originator = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLHolidayThemeType[] $holidayThemes
     */
    private $holidayThemes = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType[] $marketingCodeGroups
     */
    private $marketingCodeGroups = null;

    public function __construct(string $originator = null, array $holidayThemes = null, array $marketingCodeGroups = null)
    {
        $this->originator = $originator;
        $this->holidayThemes = $holidayThemes;
        $this->marketingCodeGroups = $marketingCodeGroups;
    }

    /**
     * Gets as originator
     *
     * @return string
     */
    public function getOriginator()
    {
        return $this->originator;
    }

    /**
     * Sets a new originator
     *
     * @param string $originator
     * @return self
     */
    public function setOriginator($originator)
    {
        $this->originator = $originator;
        return $this;
    }

    /**
     * Adds as holidayTheme
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLHolidayThemeType $holidayTheme
     */
    public function addToHolidayThemes(\Conecto\FeratelDsi\Dtos\NLHolidayThemeType $holidayTheme)
    {
        $this->holidayThemes[] = $holidayTheme;
        return $this;
    }

    /**
     * isset holidayThemes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHolidayThemes($index)
    {
        return isset($this->holidayThemes[$index]);
    }

    /**
     * unset holidayThemes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHolidayThemes($index)
    {
        unset($this->holidayThemes[$index]);
    }

    /**
     * Gets as holidayThemes
     *
     * @return \Conecto\FeratelDsi\Dtos\NLHolidayThemeType[]
     */
    public function getHolidayThemes()
    {
        return $this->holidayThemes;
    }

    /**
     * Sets a new holidayThemes
     *
     * @param \Conecto\FeratelDsi\Dtos\NLHolidayThemeType[] $holidayThemes
     * @return self
     */
    public function setHolidayThemes(array $holidayThemes = null)
    {
        $this->holidayThemes = $holidayThemes;
        return $this;
    }

    /**
     * Adds as marketingCodeGroup
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType $marketingCodeGroup
     */
    public function addToMarketingCodeGroups(\Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType $marketingCodeGroup)
    {
        $this->marketingCodeGroups[] = $marketingCodeGroup;
        return $this;
    }

    /**
     * isset marketingCodeGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingCodeGroups($index)
    {
        return isset($this->marketingCodeGroups[$index]);
    }

    /**
     * unset marketingCodeGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingCodeGroups($index)
    {
        unset($this->marketingCodeGroups[$index]);
    }

    /**
     * Gets as marketingCodeGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType[]
     */
    public function getMarketingCodeGroups()
    {
        return $this->marketingCodeGroups;
    }

    /**
     * Sets a new marketingCodeGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeGroupType[] $marketingCodeGroups
     * @return self
     */
    public function setMarketingCodeGroups(array $marketingCodeGroups = null)
    {
        $this->marketingCodeGroups = $marketingCodeGroups;
        return $this;
    }
}

