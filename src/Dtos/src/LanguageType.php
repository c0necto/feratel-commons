<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing LanguageType
 *
 * Defines single language object (used for translatable items). The human language is identified by ISO 639 codes.
 * XSD Type: LanguageType
 */
class LanguageType
{
    /**
     * Used to specify language as ISO 639 codes..
     *
     * @var string $value
     */
    private $value = null;

    public function __construct(string $value = null)
    {
        $this->value = $value;
    }

    /**
     * Gets as value
     *
     * Used to specify language as ISO 639 codes..
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Used to specify language as ISO 639 codes..
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}

