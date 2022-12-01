<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing HolidayThemeListType
 *
 *
 * XSD Type: HolidayThemeList
 */
class HolidayThemeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ClassificationType[] $holidayTheme
     */
    private $holidayTheme = [
        
    ];

    public function __construct(array $holidayTheme = null)
    {
        $this->holidayTheme = $holidayTheme;
    }

    /**
     * Adds as holidayTheme
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType $holidayTheme
     */
    public function addToHolidayTheme(\Conecto\FeratelDsi\Dtos\ClassificationType $holidayTheme)
    {
        $this->holidayTheme[] = $holidayTheme;
        return $this;
    }

    /**
     * isset holidayTheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHolidayTheme($index)
    {
        return isset($this->holidayTheme[$index]);
    }

    /**
     * unset holidayTheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHolidayTheme($index)
    {
        unset($this->holidayTheme[$index]);
    }

    /**
     * Gets as holidayTheme
     *
     * @return \Conecto\FeratelDsi\Dtos\ClassificationType[]
     */
    public function getHolidayTheme()
    {
        return $this->holidayTheme;
    }

    /**
     * Sets a new holidayTheme
     *
     * @param \Conecto\FeratelDsi\Dtos\ClassificationType[] $holidayTheme
     * @return self
     */
    public function setHolidayTheme(array $holidayTheme = null)
    {
        $this->holidayTheme = $holidayTheme;
        return $this;
    }
}

