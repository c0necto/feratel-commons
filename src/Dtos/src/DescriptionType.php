<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DescriptionType
 *
 * Defines single description object (used for basic data).
 * XSD Type: DescriptionType
 */
class DescriptionType
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
     * Used to specify type of description.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Used to specify name of additional service description.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Used to specify language of description.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Used to specify systems for which description is valid.
     *
     * @var string[] $systems
     */
    private $systems = null;

    /**
     * @var string $systemId
     */
    private $systemId = null;

    /**
     * Description is valid from Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
     *
     * @var int $showFrom
     */
    private $showFrom = null;

    /**
     * Description is valid to Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
     *
     * @var int $showTo
     */
    private $showTo = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var string $cCId
     */
    private $cCId = null;

    /**
     * @var string $cCAuthor
     */
    private $cCAuthor = null;

    /**
     * @var string $cCCopyright
     */
    private $cCCopyright = null;

    /**
     * @var \DateTime $cCChangeDate
     */
    private $cCChangeDate = null;

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
     * Gets as type
     *
     * Used to specify type of description.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to specify type of description.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * Used to specify name of additional service description.
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
     * Used to specify name of additional service description.
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
     * Adds as systems
     *
     * Used to specify systems for which description is valid.
     *
     * @return self
     * @param string $systems
     */
    public function addToSystems($systems)
    {
        $this->systems[] = $systems;
        return $this;
    }

    /**
     * isset systems
     *
     * Used to specify systems for which description is valid.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSystems($index)
    {
        return isset($this->systems[$index]);
    }

    /**
     * unset systems
     *
     * Used to specify systems for which description is valid.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSystems($index)
    {
        unset($this->systems[$index]);
    }

    /**
     * Gets as systems
     *
     * Used to specify systems for which description is valid.
     *
     * @return string[]
     */
    public function getSystems()
    {
        return $this->systems;
    }

    /**
     * Sets a new systems
     *
     * Used to specify systems for which description is valid.
     *
     * @param string $systems
     * @return self
     */
    public function setSystems(array $systems)
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
     * Description is valid from Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
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
     * Description is valid from Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
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
     * Description is valid to Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
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
     * Description is valid to Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
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

    /**
     * Gets as cCId
     *
     * @return string
     */
    public function getCCId()
    {
        return $this->cCId;
    }

    /**
     * Sets a new cCId
     *
     * @param string $cCId
     * @return self
     */
    public function setCCId($cCId)
    {
        $this->cCId = $cCId;
        return $this;
    }

    /**
     * Gets as cCAuthor
     *
     * @return string
     */
    public function getCCAuthor()
    {
        return $this->cCAuthor;
    }

    /**
     * Sets a new cCAuthor
     *
     * @param string $cCAuthor
     * @return self
     */
    public function setCCAuthor($cCAuthor)
    {
        $this->cCAuthor = $cCAuthor;
        return $this;
    }

    /**
     * Gets as cCCopyright
     *
     * @return string
     */
    public function getCCCopyright()
    {
        return $this->cCCopyright;
    }

    /**
     * Sets a new cCCopyright
     *
     * @param string $cCCopyright
     * @return self
     */
    public function setCCCopyright($cCCopyright)
    {
        $this->cCCopyright = $cCCopyright;
        return $this;
    }

    /**
     * Gets as cCChangeDate
     *
     * @return \DateTime
     */
    public function getCCChangeDate()
    {
        return $this->cCChangeDate;
    }

    /**
     * Sets a new cCChangeDate
     *
     * @param \DateTime $cCChangeDate
     * @return self
     */
    public function setCCChangeDate(\DateTime $cCChangeDate)
    {
        $this->cCChangeDate = $cCChangeDate;
        return $this;
    }
}

