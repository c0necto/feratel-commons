<?php

namespace Conecto\FeratelDsi\Dtos\OfferRequestSettingsType\ServiceProviderAType;

/**
 * Class representing ProductAType
 */
class ProductAType
{
    /**
     * @var string $id
     */
    private $id = null;

    public function __construct(string $id = null)
    {
        $this->id = $id;
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

