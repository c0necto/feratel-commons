<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DetailsAType\DatesAType;

/**
 * Class representing DateAType
 */
class DateAType
{
    /**
     * @var \DateTime $from
     */
    private $from = null;

    /**
     * @var \DateTime $to
     */
    private $to = null;

    public function __construct(\DateTime $from = null, \DateTime $to = null)
    {
        $this->from = $from;
        $this->to = $to;
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
}

