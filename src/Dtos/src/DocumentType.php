<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DocumentType
 *
 * Defines single document object (used for basic data).
 * XSD Type: DocumentType
 */
class DocumentType
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
     * @var string $class
     */
    private $class = null;

    /**
     * Used to specify systems for which document is valid.
     *
     * @var string[] $systems
     */
    private $systems = null;

    /**
     * @var string $systemId
     */
    private $systemId = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * Document is valid from Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
     *
     * @var int $showFrom
     */
    private $showFrom = null;

    /**
     * Document is valid to Month/Day. Stored as (Month * 100) + Day
     *  Eg. 1st of January is 101
     *  31th of december is 1231
     *
     * @var int $showTo
     */
    private $showTo = null;

    /**
     * @var string $copyright
     */
    private $copyright = null;

    /**
     * @var string $extension
     */
    private $extension = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var int $width
     */
    private $width = null;

    /**
     * @var int $height
     */
    private $height = null;

    /**
     * @var string $name
     */
    private $name = null;

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
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    /**
     * @var string $uRL
     */
    private $uRL = null;

    public function __construct(string $id = null, string $type = null, string $class = null, array $systems = null, string $systemId = null, int $order = null, int $showFrom = null, int $showTo = null, string $copyright = null, string $extension = null, int $size = null, \DateTime $changeDate = null, int $width = null, int $height = null, string $name = null, string $cCId = null, string $cCAuthor = null, string $cCCopyright = null, \DateTime $cCChangeDate = null, array $names = null, string $uRL = null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->class = $class;
        $this->systems = $systems;
        $this->systemId = $systemId;
        $this->order = $order;
        $this->showFrom = $showFrom;
        $this->showTo = $showTo;
        $this->copyright = $copyright;
        $this->extension = $extension;
        $this->size = $size;
        $this->changeDate = $changeDate;
        $this->width = $width;
        $this->height = $height;
        $this->name = $name;
        $this->cCId = $cCId;
        $this->cCAuthor = $cCAuthor;
        $this->cCCopyright = $cCCopyright;
        $this->cCChangeDate = $cCChangeDate;
        $this->names = $names;
        $this->uRL = $uRL;
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
     * Gets as class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * @param string $class
     * @return self
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as systems
     *
     * Used to specify systems for which document is valid.
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
     * Used to specify systems for which document is valid.
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
     * Used to specify systems for which document is valid.
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
     * Used to specify systems for which document is valid.
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
     * Used to specify systems for which document is valid.
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
     * Gets as showFrom
     *
     * Document is valid from Month/Day. Stored as (Month * 100) + Day
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
     * Document is valid from Month/Day. Stored as (Month * 100) + Day
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
     * Document is valid to Month/Day. Stored as (Month * 100) + Day
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
     * Document is valid to Month/Day. Stored as (Month * 100) + Day
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
     * Gets as copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * @param string $copyright
     * @return self
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Gets as extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
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
     * Gets as width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
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

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToNames(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->names[] = $translation;
        return $this;
    }

    /**
     * isset names
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     * @return self
     */
    public function setNames(array $names = null)
    {
        $this->names = $names;
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
}

