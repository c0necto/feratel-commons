<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportEventsAType\EventAType\DocumentsAType;

/**
 * Class representing DocumentAType
 */
class DocumentAType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $class
     */
    private $class = null;

    /**
     * @var string $extension
     */
    private $extension = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var string $copyright
     */
    private $copyright = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var int $showFrom
     */
    private $showFrom = null;

    /**
     * @var int $showTo
     */
    private $showTo = null;

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

    public function __construct(string $name = null, string $class = null, string $extension = null, int $size = null, string $copyright = null, int $order = null, int $showFrom = null, int $showTo = null, string $cCId = null, string $cCAuthor = null, string $cCCopyright = null, \DateTime $cCChangeDate = null, array $names = null, string $uRL = null)
    {
        $this->name = $name;
        $this->class = $class;
        $this->extension = $extension;
        $this->size = $size;
        $this->copyright = $copyright;
        $this->order = $order;
        $this->showFrom = $showFrom;
        $this->showTo = $showTo;
        $this->cCId = $cCId;
        $this->cCAuthor = $cCAuthor;
        $this->cCCopyright = $cCCopyright;
        $this->cCChangeDate = $cCChangeDate;
        $this->names = $names;
        $this->uRL = $uRL;
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

