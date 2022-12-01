<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KVCustomAttributeListType
 *
 *
 * XSD Type: KVCustomAttributeList
 */
class KVCustomAttributeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\KVCustomAttributeType[] $customAttribute
     */
    private $customAttribute = [
        
    ];

    public function __construct(array $customAttribute = null)
    {
        $this->customAttribute = $customAttribute;
    }

    /**
     * Adds as customAttribute
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVCustomAttributeType $customAttribute
     */
    public function addToCustomAttribute(\Conecto\FeratelDsi\Dtos\KVCustomAttributeType $customAttribute)
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
     * @return \Conecto\FeratelDsi\Dtos\KVCustomAttributeType[]
     */
    public function getCustomAttribute()
    {
        return $this->customAttribute;
    }

    /**
     * Sets a new customAttribute
     *
     * @param \Conecto\FeratelDsi\Dtos\KVCustomAttributeType[] $customAttribute
     * @return self
     */
    public function setCustomAttribute(array $customAttribute = null)
    {
        $this->customAttribute = $customAttribute;
        return $this;
    }
}

