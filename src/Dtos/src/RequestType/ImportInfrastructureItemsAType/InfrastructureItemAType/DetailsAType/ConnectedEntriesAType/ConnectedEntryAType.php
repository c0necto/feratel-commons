<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\ConnectedEntriesAType;

/**
 * Class representing ConnectedEntryAType
 */
class ConnectedEntryAType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $type = null, string $id = null)
    {
        $this->type = $type;
        $this->id = $id;
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
}

