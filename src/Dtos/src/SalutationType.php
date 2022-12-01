<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing SalutationType
 *
 *
 * XSD Type: SalutationType
 */
class SalutationType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * Used to specify language of description.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * @var string $gender
     */
    private $gender = null;

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var bool $default
     */
    private $default = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    public function __construct(string $id = null, int $order = null, string $language = null, string $gender = null, string $title = null, bool $default = null, \DateTime $changeDate = null)
    {
        $this->id = $id;
        $this->order = $order;
        $this->language = $language;
        $this->gender = $gender;
        $this->title = $title;
        $this->default = $default;
        $this->changeDate = $changeDate;
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
     * Gets as language
     *
     * Used to specify language of description.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Used to specify language of description.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
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

