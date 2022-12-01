<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing TranslatableItemType
 *
 *
 * XSD Type: TranslatableItem
 */
class TranslatableItemType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Used to specify language of description.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as language
     *
     * Used to specify language of description.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Used to specify language of description.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }
}

