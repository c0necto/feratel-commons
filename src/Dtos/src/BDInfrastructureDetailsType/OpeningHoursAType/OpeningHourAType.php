<?php

namespace Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType\OpeningHoursAType;

/**
 * Class representing OpeningHourAType
 */
class OpeningHourAType
{
    /**
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * @var string $timeFrom
     */
    private $timeFrom = null;

    /**
     * @var string $timeTo
     */
    private $timeTo = null;

    /**
     * @var bool $mon
     */
    private $mon = null;

    /**
     * @var bool $tue
     */
    private $tue = null;

    /**
     * @var bool $wed
     */
    private $wed = null;

    /**
     * @var bool $thu
     */
    private $thu = null;

    /**
     * @var bool $fri
     */
    private $fri = null;

    /**
     * @var bool $sat
     */
    private $sat = null;

    /**
     * @var bool $sun
     */
    private $sun = null;

    public function __construct(\DateTime $dateFrom = null, \DateTime $dateTo = null, string $timeFrom = null, string $timeTo = null, bool $mon = null, bool $tue = null, bool $wed = null, bool $thu = null, bool $fri = null, bool $sat = null, bool $sun = null)
    {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->timeFrom = $timeFrom;
        $this->timeTo = $timeTo;
        $this->mon = $mon;
        $this->tue = $tue;
        $this->wed = $wed;
        $this->thu = $thu;
        $this->fri = $fri;
        $this->sat = $sat;
        $this->sun = $sun;
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
     * Gets as dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as timeFrom
     *
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * Sets a new timeFrom
     *
     * @param string $timeFrom
     * @return self
     */
    public function setTimeFrom($timeFrom)
    {
        $this->timeFrom = $timeFrom;
        return $this;
    }

    /**
     * Gets as timeTo
     *
     * @return string
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Sets a new timeTo
     *
     * @param string $timeTo
     * @return self
     */
    public function setTimeTo($timeTo)
    {
        $this->timeTo = $timeTo;
        return $this;
    }

    /**
     * Gets as mon
     *
     * @return bool
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * @param bool $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;
        return $this;
    }

    /**
     * Gets as tue
     *
     * @return bool
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * @param bool $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;
        return $this;
    }

    /**
     * Gets as wed
     *
     * @return bool
     */
    public function getWed()
    {
        return $this->wed;
    }

    /**
     * Sets a new wed
     *
     * @param bool $wed
     * @return self
     */
    public function setWed($wed)
    {
        $this->wed = $wed;
        return $this;
    }

    /**
     * Gets as thu
     *
     * @return bool
     */
    public function getThu()
    {
        return $this->thu;
    }

    /**
     * Sets a new thu
     *
     * @param bool $thu
     * @return self
     */
    public function setThu($thu)
    {
        $this->thu = $thu;
        return $this;
    }

    /**
     * Gets as fri
     *
     * @return bool
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * @param bool $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;
        return $this;
    }

    /**
     * Gets as sat
     *
     * @return bool
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * @param bool $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;
        return $this;
    }

    /**
     * Gets as sun
     *
     * @return bool
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * @param bool $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;
        return $this;
    }
}

