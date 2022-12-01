<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BasicSChPeriodicElementType
 *
 *
 * XSD Type: BasicSChPeriodicElementType
 */
class BasicSChPeriodicElementType extends BasicSChElementType
{
    /**
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    public function __construct(\DateTime $start = null, \DateTime $end = null, \DateTime $changeDate = null, string $salesChannel = null, \DateTime $dateFrom = null)
    {
        $this->start = $start;
        $this->end = $end;
        $this->changeDate = $changeDate;
        parent::__construct($salesChannel,$dateFrom);
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

    /**
     * Gets as changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * @param \DateTime $changeDate
     * @return self
     */
    public function setChangeDate(\DateTime $changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }
}

