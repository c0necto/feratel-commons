<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\LinksAType;

/**
 * Class representing LinkAType
 */
class LinkAType
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
     * @var int $type
     */
    private $type = null;

    /**
     * @var int $order
     */
    private $order = null;

    public function __construct(string $name = null, string $uRL = null, int $type = null, int $order = null)
    {
        $this->name = $name;
        $this->uRL = $uRL;
        $this->type = $type;
        $this->order = $order;
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
     * Gets as type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param int $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
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
}

