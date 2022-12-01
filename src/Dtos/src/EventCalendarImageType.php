<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing EventCalendarImageType
 *
 *
 * XSD Type: EventCalendarImageType
 */
class EventCalendarImageType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $name = null, string $uRL = null, int $order = null, string $id = null)
    {
        $this->name = $name;
        $this->uRL = $uRL;
        $this->order = $order;
        $this->id = $id;
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
     * Gets as uRL
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

