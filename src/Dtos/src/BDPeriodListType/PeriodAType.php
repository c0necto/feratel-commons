<?php

namespace Conecto\FeratelDsi\Dtos\BDPeriodListType;

/**
 * Class representing PeriodAType
 */
class PeriodAType
{
    /**
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * @var \DateTime $end
     */
    private $end = null;

    public function __construct(\DateTime $start = null, \DateTime $end = null)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Gets as start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }
}

