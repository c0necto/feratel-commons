<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RequestedType
 *
 *
 * XSD Type: RequestedType
 */
class RequestedType
{
    /**
     * @var bool $show
     */
    private $show = null;

    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(bool $show = null, string $id = null)
    {
        $this->show = $show;
        $this->id = $id;
    }

    /**
     * Gets as show
     *
     * @return bool
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * Sets a new show
     *
     * @param bool $show
     * @return self
     */
    public function setShow($show)
    {
        $this->show = $show;
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

