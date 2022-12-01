<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ClassificationType
 *
 *
 * XSD Type: ClassificationType
 */
class ClassificationType extends HotSpotGroupType
{
    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * @var bool $global
     */
    private $global = null;

    /**
     * @var bool $showOnWeb
     */
    private $showOnWeb = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     */
    private $descriptions = null;

    public function __construct(bool $active = null, string $uRL = null, bool $global = null, bool $showOnWeb = null, array $descriptions = null, string $id = null, int $order = null, \DateTime $changeDate = null, array $name = null)
    {
        $this->active = $active;
        $this->uRL = $uRL;
        $this->global = $global;
        $this->showOnWeb = $showOnWeb;
        $this->descriptions = $descriptions;
        parent::__construct($id,$order,$changeDate,$name);
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     * Gets as global
     *
     * @return bool
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * Sets a new global
     *
     * @param bool $global
     * @return self
     */
    public function setGlobal($global)
    {
        $this->global = $global;
        return $this;
    }

    /**
     * Gets as showOnWeb
     *
     * @return bool
     */
    public function getShowOnWeb()
    {
        return $this->showOnWeb;
    }

    /**
     * Sets a new showOnWeb
     *
     * @param bool $showOnWeb
     * @return self
     */
    public function setShowOnWeb($showOnWeb)
    {
        $this->showOnWeb = $showOnWeb;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType $description
     */
    public function addToDescriptions(\Conecto\FeratelDsi\Dtos\DescriptionType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * @return \Conecto\FeratelDsi\Dtos\DescriptionType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Conecto\FeratelDsi\Dtos\DescriptionType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }
}

