<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RequestPoolSettingsType
 *
 *
 * XSD Type: RequestPoolSettingsType
 */
class RequestPoolSettingsType
{
    /**
     * @var int $maxTickets
     */
    private $maxTickets = null;

    /**
     * @var string $contactBy
     */
    private $contactBy = null;

    public function __construct(int $maxTickets = null, string $contactBy = null)
    {
        $this->maxTickets = $maxTickets;
        $this->contactBy = $contactBy;
    }

    /**
     * Gets as maxTickets
     *
     * @return int
     */
    public function getMaxTickets()
    {
        return $this->maxTickets;
    }

    /**
     * Sets a new maxTickets
     *
     * @param int $maxTickets
     * @return self
     */
    public function setMaxTickets($maxTickets)
    {
        $this->maxTickets = $maxTickets;
        return $this;
    }

    /**
     * Gets as contactBy
     *
     * @return string
     */
    public function getContactBy()
    {
        return $this->contactBy;
    }

    /**
     * Sets a new contactBy
     *
     * @param string $contactBy
     * @return self
     */
    public function setContactBy($contactBy)
    {
        $this->contactBy = $contactBy;
        return $this;
    }
}

