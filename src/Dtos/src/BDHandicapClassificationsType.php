<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDHandicapClassificationsType
 *
 *
 * XSD Type: BDHandicapClassificationsType
 */
class BDHandicapClassificationsType extends ItemListType
{
    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    public function __construct(\DateTime $changeDate = null, array $item = null)
    {
        $this->changeDate = $changeDate;
        parent::__construct($item);
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

