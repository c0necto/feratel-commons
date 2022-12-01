<?php

namespace Conecto\FeratelDsi\Dtos\SearchParametersType;

/**
 * Class representing PackageContainerAType
 */
class PackageContainerAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $categorieId
     */
    private $categorieId = null;

    public function __construct(string $id = null, string $categorieId = null)
    {
        $this->id = $id;
        $this->categorieId = $categorieId;
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
     * Gets as categorieId
     *
     * @return string
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * Sets a new categorieId
     *
     * @param string $categorieId
     * @return self
     */
    public function setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;
        return $this;
    }
}

