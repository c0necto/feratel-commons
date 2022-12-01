<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDGTCItemType
 *
 *
 * XSD Type: BDGTCItem
 */
class BDGTCItemType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $language
     */
    private $language = null;

    /**
     * @var string $systems
     */
    private $systems = null;

    /**
     * @var string $systemId
     */
    private $systemId = null;

    /**
     * @var int $showFrom
     */
    private $showFrom = null;

    /**
     * @var int $showTo
     */
    private $showTo = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
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
     * Gets as language
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
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as systems
     *
     * @return string
     */
    public function getSystems()
    {
        return $this->systems;
    }

    /**
     * Sets a new systems
     *
     * @param string $systems
     * @return self
     */
    public function setSystems($systems)
    {
        $this->systems = $systems;
        return $this;
    }

    /**
     * Gets as systemId
     *
     * @return string
     */
    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * Sets a new systemId
     *
     * @param string $systemId
     * @return self
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;
        return $this;
    }

    /**
     * Gets as showFrom
     *
     * @return int
     */
    public function getShowFrom()
    {
        return $this->showFrom;
    }

    /**
     * Sets a new showFrom
     *
     * @param int $showFrom
     * @return self
     */
    public function setShowFrom($showFrom)
    {
        $this->showFrom = $showFrom;
        return $this;
    }

    /**
     * Gets as showTo
     *
     * @return int
     */
    public function getShowTo()
    {
        return $this->showTo;
    }

    /**
     * Sets a new showTo
     *
     * @param int $showTo
     * @return self
     */
    public function setShowTo($showTo)
    {
        $this->showTo = $showTo;
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

