<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDTopicType
 *
 *
 * XSD Type: BDTopic
 */
class BDTopicType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $subType
     */
    private $subType = null;

    public function __construct(string $id = null, string $subType = null)
    {
        $this->id = $id;
        $this->subType = $subType;
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
     * Gets as subType
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sets a new subType
     *
     * @param string $subType
     * @return self
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
        return $this;
    }
}

