<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SearchEventCalendarDateResultType
 *
 *
 * XSD Type: SearchEventCalendarDateResultType
 */
class SearchEventCalendarDateResultType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\CalendarType[] $calendar
     */
    private $calendar = [
        
    ];

    public function __construct(array $calendar = null)
    {
        $this->calendar = $calendar;
    }

    /**
     * Adds as calendar
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CalendarType $calendar
     */
    public function addToCalendar(\Conecto\FeratelDsi\Dtos\CalendarType $calendar)
    {
        $this->calendar[] = $calendar;
        return $this;
    }

    /**
     * isset calendar
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalendar($index)
    {
        return isset($this->calendar[$index]);
    }

    /**
     * unset calendar
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalendar($index)
    {
        unset($this->calendar[$index]);
    }

    /**
     * Gets as calendar
     *
     * @return \Conecto\FeratelDsi\Dtos\CalendarType[]
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * Sets a new calendar
     *
     * @param \Conecto\FeratelDsi\Dtos\CalendarType[] $calendar
     * @return self
     */
    public function setCalendar(array $calendar = null)
    {
        $this->calendar = $calendar;
        return $this;
    }
}

