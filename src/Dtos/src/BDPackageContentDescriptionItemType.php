<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageContentDescriptionItemType
 *
 *
 * XSD Type: BDPackageContentDescriptionItem
 */
class BDPackageContentDescriptionItemType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $type
     */
    private $type = null;

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
     * @var string $introText
     */
    private $introText = null;

    /**
     * @var string[] $items
     */
    private $items = null;

    public function __construct(string $id = null, string $type = null, string $language = null, string $systems = null, string $systemId = null, int $showFrom = null, int $showTo = null, \DateTime $changeDate = null, string $introText = null, array $items = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->language = $language;
        $this->systems = $systems;
        $this->systemId = $systemId;
        $this->showFrom = $showFrom;
        $this->showTo = $showTo;
        $this->changeDate = $changeDate;
        $this->introText = $introText;
        $this->items = $items;
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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
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

    /**
     * Gets as introText
     *
     * @return string
     */
    public function getIntroText()
    {
        return $this->introText;
    }

    /**
     * Sets a new introText
     *
     * @param string $introText
     * @return self
     */
    public function setIntroText($introText)
    {
        $this->introText = $introText;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param string $item
     */
    public function addToItems($item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * isset items
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItems($index)
    {
        return isset($this->items[$index]);
    }

    /**
     * unset items
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItems($index)
    {
        unset($this->items[$index]);
    }

    /**
     * Gets as items
     *
     * @return string[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Sets a new items
     *
     * @param string[] $items
     * @return self
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }
}

