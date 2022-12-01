<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDCreditCardItemType
 *
 *
 * XSD Type: BDCreditCardItem
 */
class BDCreditCardItemType
{
    /**
     * @var string $name
     */
    private $name = null;

    public function __construct(string $name = null)
    {
        $this->name = $name;
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
}

