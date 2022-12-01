<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing KVLinkTypeListType
 *
 *
 * XSD Type: KVLinkTypeList
 */
class KVLinkTypeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\KVLinkType[] $linkType
     */
    private $linkType = [
        
    ];

    public function __construct(array $linkType = null)
    {
        $this->linkType = $linkType;
    }

    /**
     * Adds as linkType
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\KVLinkType $linkType
     */
    public function addToLinkType(\Conecto\FeratelDsi\Dtos\KVLinkType $linkType)
    {
        $this->linkType[] = $linkType;
        return $this;
    }

    /**
     * isset linkType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkType($index)
    {
        return isset($this->linkType[$index]);
    }

    /**
     * unset linkType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkType($index)
    {
        unset($this->linkType[$index]);
    }

    /**
     * Gets as linkType
     *
     * @return \Conecto\FeratelDsi\Dtos\KVLinkType[]
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * Sets a new linkType
     *
     * @param \Conecto\FeratelDsi\Dtos\KVLinkType[] $linkType
     * @return self
     */
    public function setLinkType(array $linkType = null)
    {
        $this->linkType = $linkType;
        return $this;
    }
}

