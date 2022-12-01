<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing CustomAttributeListType
 *
 *
 * XSD Type: CustomAttributeList
 */
class CustomAttributeListType
{
    /**
     * @var \DateTime $changeDate
     */
    private $changeDate = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\CustomAttributeItemType[] $customAttribute
     */
    private $customAttribute = [
        
    ];

    public function __construct(\DateTime $changeDate = null, array $customAttribute = null)
    {
        $this->changeDate = $changeDate;
        $this->customAttribute = $customAttribute;
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
     * Adds as customAttribute
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\CustomAttributeItemType $customAttribute
     */
    public function addToCustomAttribute(\Conecto\FeratelDsi\Dtos\CustomAttributeItemType $customAttribute)
    {
        $this->customAttribute[] = $customAttribute;
        return $this;
    }

    /**
     * isset customAttribute
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomAttribute($index)
    {
        return isset($this->customAttribute[$index]);
    }

    /**
     * unset customAttribute
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomAttribute($index)
    {
        unset($this->customAttribute[$index]);
    }

    /**
     * Gets as customAttribute
     *
     * @return \Conecto\FeratelDsi\Dtos\CustomAttributeItemType[]
     */
    public function getCustomAttribute()
    {
        return $this->customAttribute;
    }

    /**
     * Sets a new customAttribute
     *
     * @param \Conecto\FeratelDsi\Dtos\CustomAttributeItemType[] $customAttribute
     * @return self
     */
    public function setCustomAttribute(array $customAttribute = null)
    {
        $this->customAttribute = $customAttribute;
        return $this;
    }
}

